<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/login')->with('logoutRealizado', '¡Hasta la próxima!');
    }

    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        //validamos la peticion
        $atributs = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //Intentemos autenticar el usuario, fi falla lanzamos una excepcion
        if (!auth()->attempt($atributs)) {
            //El mensaje aparece debajo del campo que le indicamos
            throw ValidationException::withMessages([
                'email' => 'Sus credenciales no han podido ser verificadas.',
            ]);
        }
        //SE aconseja regenerar la session para evitar ataques de 'Session fixation'
        //https://owasp.org/www-community/attacks/Session_fixation
        session()->regenerate();
        
        //Redirigimos con un mesnaje flash
        return redirect('/')->with('inicioSesion','¡Bienvenido!');
    }
}

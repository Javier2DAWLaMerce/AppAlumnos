<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegistreController extends Controller
{
    public function login()
    {

        return view('login');
    }


    public function registreCreate()
    {


        return view('registre/create');
    }

    public function registreCreatePost(Request $request)
    {
        //ddd($request) ;
        $atributs = request()->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:3|max:25|unique:users,username',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|min:7|max:18',

        ]);

        // $atributs['password'] = bcrypt($atributs['password']); //Esto encriptará el atributo password, aunque es mejor hacerlo desde el Modelo, en este caso Alumno que directamente desde el controlador
        //ddd($atributs) ;
        // User::create($atributs); //se podria hacer como abajo $usuari= new User()...etc pero asi es mas rapido
        
        //esta linea de abajo es una modificacion a la hora de crear un usuario, de esta manera hacemos que el usuario haga login directamente despues de  introducir los datos de registro
        auth()->login(User::create($atributs));//Con esta linea de codigo hacemos que una vez el usuario se ha registrado haga login directamente

        
        session()->flash("registroRealizado", "Se ha creado la cuenta correctamente");//Esta metodo flash guarda la información solo en la pagina siguiente
        //a la que vamos, después se pierde, por tanto si hacemos session() de manera correcta se ejecutará el siguiente mensaje
        
       
        return redirect('/login'); //EN ESTE CASO SE REDIRIGE ASI CON REDIRECT NO CON RETURN VIEW
        /*

        $usuari = new User();
        $usuari->nom = $request->input('nom');//Incorporo los datos del usuario
        $usuari->usuari = $request->input('usuari');
        $usuari->email = $request->input('email');
        $usuari->password = $request->input('password');
    

        $usuari->save();//Salvo los datos en la base de datos
        

        // return view('registre/create'); AQUI NO FUNCIONARIA EL RETURN VIEW
        */
    }

   
/*
    public function setPasswordAttribute($password)
    {

        $this->attributes['password'] = bcrypt($password);
    }

    */
}

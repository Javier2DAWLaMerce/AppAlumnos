<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UsuarisController extends Controller
{
    public function create()
    {
        /*
    if(auth()->user()?->username!='paco'){//Con esta funcion estamos controlando si el usuario esta autorizado pero NO ES paco aborta y 
        //Vuelve a la pagina admin.usuaris.create Si queremos prescindir de este if en el controlador podemos hacer que lo controle un middleware
        abort(Response::HTTP_FORBIDDEN);
    }
    */
        return view('admin.usuaris.create');
    }
}

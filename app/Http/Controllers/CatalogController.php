<?php

namespace App\Http\Controllers;

use App\Models\Alumne;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index()
    {
        $alumnes = Alumne::all(); //De esta manera recojo los datos del objeto Alumnos
        return view('catalog/index', ['alumnes' => $alumnes]);
    }

    
    public function edit($id)
    {
        $alumnes = Alumne::find($id); //De esta manera recojo los datos del objeto Alumnos en concreto
        return view('catalog/edit', ['alumnes' => $alumnes]);
    }
    public function editPost($id,Request $request){
        $alumne = Alumne::find($id);//busco al alumno concreto

        $alumne->nom = $request->input('nom');//Cambio los datos del alumno
        $alumne->apellido1 = $request->input('apellido1');
        $alumne->apellido2 = $request->input('apellido2');
        $alumne->edad = $request->input('edad');
        $alumne->adreça = $request->input('adreça');
        $alumne->telefon = $request->input('telefon');
        $alumne->dni = $request->input('dni');

        $alumne->save();//Salvo los datos en la base de datos
        $alumnes = Alumne::all();//Hago un select de todos los alumneos y lo guardo en alumnes

        return view('catalog/index', ['alumnes' => $alumnes]);//Y me devuelves a la tabla de alumnos ya modificada


    }
    public function deleteGet($id,Request $request){
        $alumne = Alumne::find($id);//busco al alumno concreto
        $alumne->delete();//Borro los datos en la base de datos de ese alumno en concreto
        
        $alumnes = Alumne::all();//Hago un select de todos los alumneos y lo guardo en alumnes

        return view('catalog/index', ['alumnes' => $alumnes]);//Y me devuelves a la tabla de alumnos ya modificada


    }
    public function create(){

        return view('catalog/create');

    }
    public function createPost(Request $request){

       
        $alumne = new Alumne();
        $alumne->nom = $request->input('nom');//Cambio los datos del alumno
        $alumne->apellido1 = $request->input('apellido1');
        $alumne->apellido2 = $request->input('apellido2');
        $alumne->edad = $request->input('edad');
        $alumne->adreça = $request->input('adreça');
        $alumne->telefon = $request->input('telefon');
        $alumne->dni = $request->input('dni');

        $alumne->save();//Salvo los datos en la base de datos
        $alumnes = Alumne::all();//Hago un select de todos los alumneos y lo guardo en alumnes

        return view('catalog/index', ['alumnes' => $alumnes]);//Y me devuelves a la tabla de alumnos ya modificada


    }
  
   

}

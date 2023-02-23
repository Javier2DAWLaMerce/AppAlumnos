@extends('layouts.app')

@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar Alumne
          </div>
          <div class="card-body" style="padding:30px">
                                        {{-- action = "edit" --}}
            <form method="post">{{-- TODO: Obrir el formulari i indicar el mètode POST --}}
              {{--EL PUT se utiliza cuando se reescribe  --}}
               @csrf {{-- TODO: Protecció contra CSRF --}}
 
             <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="{{$alumnes['nom']}}" class="form-control">
             </div>
 
             <div class="form-group">
                <label for="apellido1">Primer Cognom</label>
                <input type="text" name="apellido1" id="apellido1" value="{{$alumnes['apellido1']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>

             <div class="form-group">
                <label for="apellido2">Segon Cognom</label>
                <input type="text" name="apellido2" id="apellido2" value="{{$alumnes['apellido2']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>

             <div class="form-group">
                <label for="edad">Edat</label>
                <input type="text" name="edad" id="edad" value="{{$alumnes['edad']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>

             <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" name="adreça" id="adreça" value="{{$alumnes['adreça']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>

             <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="text" name="telefon" id="telefon" value="{{$alumnes['telefon']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>

             <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" value="{{$alumnes['dni']}}" class="form-control">{{-- TODO: Completa l'input per l'any --}}
             </div>
 
             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar datos de alumno
                </button>
             </div>
 
            </form>{{-- TODO: Tancar formulari --}}
 
          </div>
       </div>
    </div>
 </div>

@endsection
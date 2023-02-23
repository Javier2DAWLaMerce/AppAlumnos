@extends('layouts.app')
@section('content')
       <h1 style="text-align: center">Benbinguts a la pàgina de gestió d'alumnes</h1>
       @if (session()->has('registroRealizado'))<!--Este if recoge del controlador el metodo flash y si se ha realizado session correctamente entra en el primer if -->
       <div x-data="{show:true}" x-init="setTimeout(() => show = false, 4000)" x-show = "show"
              class="fixed bg-blue-500 text-white py-2 px-4 rounded-x1 bottom-3 right-3 text-sm">
           <p> <!-- con el codigo de arriga x-data....x-show hacemos que el mensaje dure 4 segundos en pantalla -->
               {{ session('registroRealizado') }}
           </p>
       </div>
   @endif
@endsection
  

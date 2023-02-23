@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     
                            <a class="nav-link" href="{{ route('create') }}">
                                <span>&#10010;</span>Alumne
                            </a>
                    
                </div>
        </nav>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Primer Cognom</th>
                    <th scope="col">Segon Cognom</th>
                    <th scope="col">Edat</th>
                    <th scope="col">Adreça</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alumnes as $alumne)
                    <tr>
                        <td>
                            {{ $alumne['nom'] }}
                        </td>
                        <td>
                            {{ $alumne['apellido1'] }}
                        </td>
                        <td>
                            {{ $alumne['apellido2'] }}
                        </td>
                        <td>
                            {{ $alumne['edad'] }}
                        </td>
                        <td>
                            {{ $alumne['adreça'] }}
                        </td>
                        <td>
                            {{ $alumne['telefon'] }}
                        </td>
                        <td>
                            {{ $alumne['dni'] }}
                        </td>
                        <td>
                            <a href="{{ route('edit', ['id' => $alumne['id']]) }}">Editar
                        </td>
                        <td>
                            <a href="{{ route('deleteGet', ['id' => $alumne['id']]) }}">Eliminar
                        </td>
                    </tr>
                @endforeach{{-- Debemos cerrar el foreach --}}
        </table>
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-x1 bottom-3 right-3 text-sm">
            <p>
                <!-- con el codigo de arriga x-data....x-show hacemos que el mensaje dure 4 segundos en pantalla -->
                {{ session('inicioSesion') }}
            </p>
        </div>
    @endsection

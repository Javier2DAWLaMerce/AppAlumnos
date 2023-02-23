@extends('layouts.master')

@section('content')
    <div class="row">
       
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
    </div>
@endsection

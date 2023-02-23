@extends('layouts.app')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10">
        <div class="border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Accés amb credencials</h1>

            <form method="GET" action="/login" class="mt-10">
                @csrf
                <div class="mt-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for=email"">Email

                    </label>

                    <input class="border border-gray-200 p-2 w-full rounded" name="email" type="email" id="email" value="{{old('email')}}">
                    @error('email')<!-- De esta manera podemos recuperar si hubiese un error a la hora de registrarse, -->
                    <p class= "text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password

                    </label>

                    <input class="border border-gray-200 p-2 w-full rounded" name="password" type="password" id="password"value="{{old('password')}}">
                    @error('password')<!-- De esta manera podemos recuperar si hubiese un error a la hora de registrarse, -->
                    <p class= "text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                        ACCEDEIX
                    </button>
                </div>
            </form>
           
        </div>
    </main>
</section>
@endsection

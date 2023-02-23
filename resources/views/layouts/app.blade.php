<!doctype html>

<head>
    <title>Gestió d'alumnes</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>


<body style="font-family: Open Sans, sans-serif;background-color:aliceblue">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/canela.jpg" alt="Alumnes" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                <!--De esta manera hacemos que solo veras este link si eres invitado
                    en el caso que se lo quisieramos ocutar a un registrado sería arroba auth-->
                @guest
                    <a href="/registre" class="text-xs font-bold uppercase ">
                        Registre
                    </a>
                @endguest
                @auth
                    <!-- De esta manera mostramos al usuario ya registrado su nombre en vez de enseñar el link "Registro"-->
                    <span class="text-xs font-bold uppercase ">Hola, {{ auth()->user()->name }}</span>
                    <form action="/logout" method="POST" id="logout-form" class="text-xs font-bold ml-4 text-blue-700">
                        @csrf
                        <button type="submit">Sortir</button>
                    </form>
                @endauth
                <a href="/login" class="ml-6 text-xs font-bold uppercase ">
                    Login
                </a>


            </div>
        </nav>
        @yield('content')
    </section>
</body>

</html>

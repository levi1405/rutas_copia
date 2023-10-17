<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/plant_css.css') }}">
    <title>@yield('title')</title>
    {{-- favicon --}}
    {{-- estilos --}}
    <style>
        .menu {
    position: fixed;
    left: -250px; /* Inicialmente oculto */
    top: 0;
    height: 100%;
    width: 250px;
    background: #333;
    transition: left 0.3s;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

nav {
    margin-top: 20px;
}

a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    margin: 10px 0;
    transition: color 0.3s;
}

a:hover {
    color: #ff6600;
}

.toggle-menu {
    position: absolute;
    top: 20px;
    left: 10px;
    cursor: pointer;
    font-size: 24px;
    color: white;
}

/* Estilos cuando el menú está expandido */
.menu.active {
    left: 0;
}
/* //////////////////////////////////////// */
        /* nav {
    display: flex;
    justify-content: center;
    background-color: #333;
    padding: 20px 0;
}

a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    margin: 0 20px;
    position: relative;
    transition: color 0.3s, transform 0.3s;
}

a.active,
a:hover {
    color: #ff6600; 
    transform: scale(1.1); 
}

a::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #ff6600; 
    bottom: -5px;
    left: 0;
    transform: scaleX(0);
    transform-origin: 100%;
    transition: transform 0.3s;
}

a.active::before,
a:hover::before {
    transform: scaleX(1);
} */
    </style>
    
</head>
{{-- header --}}
<header>
    <h3>Code Cursos</h3>
    <div class="menu">
        <div class="toggle-menu" id="toggle-menu">&#9776;</div>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"> Home </a>
        <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.index') ? 'active' : '' }}">cursos
        </a>
        <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros </a>
    </nav>
</div>
</header>
{{-- nav --}}

<body>
    @yield('content')
</body>
<script>
    document.getElementById('toggle-menu').addEventListener('click', function() {
var menu = document.querySelector('.menu');
menu.classList.toggle('active');
});
</script>
{{-- footer --}}
{{-- script --}}

</html>

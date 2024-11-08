<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* CSS de Encabezado */
        .encabezado {
            background: linear-gradient(90deg, #ff00cc, #6600cc); /* Gradiente de rosa a morado */
            color: white;
            padding: 10px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidad */
        }

        .titulo {
            font-size: 24px;
            color: white;
            font-weight: bold;
            margin: 0;
            padding-left: 5px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            margin-right: 15px; /* Espacio entre los elementos del menú */
            transition: color 0.3s ease; /* Transición para el efecto hover */
        }

        .navbar-nav .nav-link:hover {
            color: #ffe0ff !important; /* Cambio de color al pasar el mouse */
        }

        .iconos-derecha .icono {
            font-size: 24px;
            color: white;
            margin-left: 20px;
            transition: color 0.3s ease; /* Transición para el efecto hover */
        }

        .iconos-derecha .icono:hover {
            color: #ffe0ff; /* Cambio de color al pasar el mouse */
        }

        /* Barra de búsqueda */
        .search-bar {
            display: none; /* Oculta la barra de búsqueda por defecto */
            margin-left: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: display 0.3s ease;
        }

        /* Menú de usuario */
        .usuario-menu {
            position: relative;
        }

        .user-menu-content {
            display: none; /* Oculta el menú de usuario por defecto */
            position: absolute;
            top: 35px;
            right: 0;
            background-color: #ffffff;
            color: #333;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            min-width: 150px;
            z-index: 1;
        }

        .user-menu-content a {
            color: #333;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }

        .user-menu-content a:hover {
            background-color: #f0f0f0;
        }

        /* Pie de Página */
        .pie-pagina {
            background-color: #1F308A; 
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
            font-size: 14px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }

        .logopie {
            width: 20%; 
            height: 100px; 
            margin: 0 auto; 
            display: block;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <nav class="navbar navbar-expand-lg encabezado">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo" width="60" height="auto">
                <span class="titulo">ONLINE COFFEE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Comunidad</a></li>
                </ul>
                <div class="iconos-derecha d-flex align-items-center">
                    <!-- Ícono de búsqueda -->
                    <a href="#" class="icono" onclick="toggleSearch()"><i class="fas fa-search"></i></a>
                    <!-- Barra de búsqueda oculta por defecto -->
                    <input type="text" id="search-bar" class="search-bar" placeholder="Buscar...">
                    
                    <!-- Ícono de carrito -->
                    <a href="/lista-compras" class="icono"><i class="fas fa-shopping-cart"></i></a>
                    
                    <!-- Ícono de usuario con menú desplegable -->
                    <div class="usuario-menu">
                        <a href="#" class="icono" onclick="toggleUserMenu()"><i class="fas fa-user"></i></a>
                        <div id="user-menu" class="user-menu-content">
                            <a href="/perfil">Perfil</a>
                            <a href="/configuracion">Configuración</a>
                            <a href="/logout">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="contenido flex-grow-1">
        @yield('content') 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Función para mostrar/ocultar la barra de búsqueda
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            if (searchBar.style.display === 'none' || searchBar.style.display === '') {
                searchBar.style.display = 'inline-block';
                searchBar.focus();
            } else {
                searchBar.style.display = 'none';
            }
        }

        // Función para mostrar/ocultar el menú de usuario
        function toggleUserMenu() {
            const userMenu = document.getElementById('user-menu');
            userMenu.style.display = (userMenu.style.display === 'none' || userMenu.style.display === '') ? 'block' : 'none';
        }

        // Cierra el menú de usuario si se hace clic fuera de él
        window.onclick = function(event) {
            if (!event.target.matches('.fa-user')) {
                const userMenu = document.getElementById('user-menu');
                if (userMenu && userMenu.style.display === 'block') {
                    userMenu.style.display = 'none';
                }
            }
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header class="main-header">
        <div class="logo">MiTienda</div>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Crear Producto</a>
            <a href="#">Contacto</a>
        </nav>
    </header>

@yield('content')

    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="footer-content">
            <p>© 2026 MiTienda. Todos los derechos reservados.</p>
            <div class="socials">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

</body>
</html>

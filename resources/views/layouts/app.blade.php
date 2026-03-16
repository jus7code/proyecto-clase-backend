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
        <a href="/">Inicio</a>
        <a href="{{ route('product.index') }}">Productos</a>
        <a href="{{ route('product.create') }}">Crear Producto</a>
        <a href="{{ route('cart.index') }}" class="cart-nav-link">
            🛒 Carrito
            @php $cartCount = array_sum(array_column(session()->get('cart', []), 'quantity')); @endphp
            @if($cartCount > 0)
                <span class="cart-badge">{{ $cartCount }}</span>
            @endif
        </a>
        <a href="{{ route('admin.index') }}">Configuración</a>
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

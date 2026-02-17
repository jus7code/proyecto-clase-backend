<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <!-- CONTENIDO -->
    <main class="container-products">

        <h2 class="section-title">Nuestros Productos</h2>

        <div class="products-grid">

            <!-- PRODUCTO 1 -->
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" alt="Laptop">
                <div class="product-info">
                    <h3>Laptop Gamer</h3>
                    <p class="price">$2.500.000</p>
                    <p class="description">
                        Laptop de alto rendimiento ideal para gaming y trabajo profesional.
                    </p>
                    <span class="status activo">Activo</span>
                    <button class="btn-small">Ver Detalles</button>
                </div>
            </div>

            <!-- PRODUCTO 2 -->
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9" alt="Smartphone">
                <div class="product-info">
                    <h3>Smartphone Pro</h3>
                    <p class="price">$1.800.000</p>
                    <p class="description">
                        Smartphone de última generación con excelente cámara y batería.
                    </p>
                    <span class="status activo">Activo</span>
                    <button class="btn-small">Ver Detalles</button>
                </div>
            </div>

            <!-- PRODUCTO 3 -->
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1518444028785-8c1a7f0bdbf4?auto=format&fit=crop&w=800&q=80" alt="Audífonos Bluetooth">
                <div class="product-info">
                    <h3>Audífonos Bluetooth</h3>
                    <p class="price">$320.000</p>
                    <p class="description">
                        Audífonos inalámbricos con cancelación de ruido y sonido premium.
                    </p>
                    <span class="status inactivo">Inactivo</span>
                    <button class="btn-small">Ver Detalles</button>
                </div>
            </div>

        </div>

    </main>

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

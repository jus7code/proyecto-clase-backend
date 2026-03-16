@extends('layouts.app')
 
@section('content')
 
<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <span class="hero-badge">✦ Bienvenido a nuestra tienda</span>
        <h1 class="hero-title">Descubre los mejores<br><span class="hero-highlight">productos para ti</span></h1>
        <p class="hero-subtitle">Calidad, estilo y comodidad en un solo lugar. Explora nuestro catálogo y encuentra lo que necesitas.</p>
        <div class="hero-actions">
            <a href="{{ route('product.index') }}" class="btn-hero-primary">Ver productos</a>
        </div>
    </div>
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
</section>
 
<!-- ===== STATS ===== -->
<section class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <span class="stat-number">200+</span>
            <span class="stat-label">Productos</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number">2k+</span>
            <span class="stat-label">Clientes felices</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number">98%</span>
            <span class="stat-label">Satisfacción</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number">24/7</span>
            <span class="stat-label">Soporte</span>
        </div>
    </div>
</section>
 
<!-- ===== FEATURES ===== -->
<section class="features-section" id="features">
    <h2 class="section-title">¿Por qué elegirnos?</h2>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">🚚</div>
            <h3>Envío rápido</h3>
            <p>Recibe tu pedido en menos de 48 horas a cualquier parte del país.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🔒</div>
            <h3>Compra segura</h3>
            <p>Tus datos y pagos están protegidos con encriptación de nivel bancario.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">↩️</div>
            <h3>Devoluciones fáciles</h3>
            <p>¿No quedaste satisfecho? Te devolvemos el dinero sin preguntas.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🏆</div>
            <h3>Calidad garantizada</h3>
            <p>Todos nuestros productos pasan por un riguroso control de calidad.</p>
        </div>
    </div>
</section>
 
<!-- ===== CATEGORÍAS ===== -->
<section class="categories-section">
    <h2 class="section-title">Lo que encontrarás</h2>
    <div class="categories-grid">
        <div class="category-card">
            <div class="category-icon">👕</div>
            <h3>Ropa & Moda</h3>
            <p>Tendencias actuales para cada ocasión</p>
        </div>
        <div class="category-card">
            <div class="category-icon">📱</div>
            <h3>Tecnología</h3>
            <p>Los mejores gadgets y accesorios</p>
        </div>
        <div class="category-card">
            <div class="category-icon">🏠</div>
            <h3>Hogar</h3>
            <p>Todo para tu espacio ideal</p>
        </div>
        <div class="category-card">
            <div class="category-icon">⚽</div>
            <h3>Deportes</h3>
            <p>Equipamiento para cada disciplina</p>
        </div>
    </div>
</section>
 
<!-- ===== CTA BANNER ===== -->
<section class="cta-section">
    <div class="cta-content">
        <h2>¿Listo para empezar?</h2>
        <p>Explora todo nuestro catálogo y encuentra exactamente lo que buscas.</p>
        <a href="{{ route('product.index') }}" class="btn-cta">Explorar catálogo completo</a>
    </div>
    <div class="cta-shapes">
        <div class="cta-shape cta-shape-1"></div>
        <div class="cta-shape cta-shape-2"></div>
    </div>
</section>

@endsection
@extends('layouts.app')
 
@section('content')
 
<div class="admin-wrapper">
 
    <!-- SIDEBAR -->
    <aside class="admin-sidebar">
        <div class="sidebar-brand">
            <span class="sidebar-icon">⚙️</span>
            <span>Admin Panel</span>
        </div>
 
        <nav class="sidebar-nav">
            <p class="sidebar-section-label">General</p>
            <a href="{{ route('admin.index') }}" class="sidebar-link active">
                <span class="link-icon">🏠</span> Dashboard
            </a>
 
            <p class="sidebar-section-label">Catálogo</p>
            <a href="{{ route('product.index') }}" class="sidebar-link">
                <span class="link-icon">📦</span> Productos
            </a>
            <a href="#" class="sidebar-link">
                <span class="link-icon">➕</span> Nuevo Producto
            </a>
        </nav>
 
        <div class="sidebar-footer">
            <a href="{{ route('product.index') }}" class="sidebar-link">
                <span class="link-icon">🛒</span> Ver tienda
            </a>
        </div>
    </aside>
 
    <!-- CONTENIDO PRINCIPAL -->
    <main class="admin-main">
 
        <!-- TOPBAR -->
        <div class="admin-topbar">
            <h1 class="admin-page-title">Dashboard</h1>
            <span class="admin-topbar-date">{{ now()->format('d/m/Y') }}</span>
        </div>
 
        <!-- LANDING BIENVENIDA -->
        <div class="admin-welcome">
            <div class="welcome-text">
                <h2>Bienvenido al panel de administración</h2>
                <p>Desde aquí puedes gestionar todos los aspectos de tu tienda. Usa el menú lateral para navegar entre las distintas secciones.</p>
            </div>
            <div class="welcome-icon">⚙️</div>
        </div>
 
        <!-- CARDS RÁPIDAS -->
        <div class="admin-quick-cards">
            <div class="quick-card">
                <div class="quick-card-icon">📦</div>
                <div class="quick-card-info">
                    <span class="quick-card-label">Productos</span>
                    <span class="quick-card-desc">Gestiona tu catálogo</span>
                </div>
                <a href="{{ route('product.index') }}" class="quick-card-btn">Ir →</a>
            </div>
            <div class="quick-card">
                <div class="quick-card-icon">➕</div>
                <div class="quick-card-info">
                    <span class="quick-card-label">Nuevo Producto</span>
                    <span class="quick-card-desc">Agrega al catálogo</span>
                </div>
                <a href="#" class="quick-card-btn">Ir →</a>
            </div>
            <div class="quick-card">
                <div class="quick-card-icon">🛒</div>
                <div class="quick-card-info">
                    <span class="quick-card-label">Ver tienda</span>
                    <span class="quick-card-desc">Vista del cliente</span>
                </div>
                <a href="{{ route('product.index') }}" class="quick-card-btn">Ir →</a>
            </div>
        </div>
 
    </main>
 
</div>

@endsection
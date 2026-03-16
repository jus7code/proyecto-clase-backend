@extends('layouts.admin')
 
@section('admin-content')
 
<!-- TOPBAR -->
<div class="admin-topbar">
    <h1 class="admin-page-title">Dashboard</h1>
    <span class="admin-topbar-date">{{ now()->format('d/m/Y') }}</span>
</div>
 
<!-- BIENVENIDA -->
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
        <a href="{{ route('admin.products') }}" class="quick-card-btn">Ir →</a>
    </div>
    <div class="quick-card">
        <div class="quick-card-icon">➕</div>
        <div class="quick-card-info">
            <span class="quick-card-label">Nuevo Producto</span>
            <span class="quick-card-desc">Agrega al catálogo</span>
            <a href="{{ route('product.create') }}" class="quick-card-btn">Ir →</a>
        </div>
    
    </div>
    <div class="quick-card">
        <div class="quick-card-icon">🛒</div>
        <div class="quick-card-info">
            <span class="quick-card-label">Ver tienda</span>
            <span class="quick-card-desc">Vista del cliente</span>
            <a href="{{ route('product.index') }}" class="quick-card-btn">Ir →</a>
        </div>
    
    </div>
</div>

@endsection
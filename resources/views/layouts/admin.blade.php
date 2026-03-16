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
            <a href="{{ route('admin.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <span class="link-icon">🏠</span> Dashboard
            </a>
 
            <p class="sidebar-section-label">Catálogo</p>
            <a href="{{ route('admin.products') }}"
               class="sidebar-link {{ request()->routeIs('admin.products') ? 'active' : '' }}">
                <span class="link-icon">📦</span> Productos
            </a>
            <a href="{{ route('admin.index') }}"
               class="sidebar-link {{ request()->routeIs('product.create') ? 'active' : '' }}">
                <span class="link-icon">➕</span> Nuevo Producto
            </a>
        </nav>
 
        <div class="sidebar-footer">
            <a href="{{ route('product.index') }}" class="sidebar-link">
            
                <span class="link-icon">🛒</span> Ver tienda
            </a>
        </div>
    </aside>
 
    <!-- CONTENIDO DINÁMICO -->
    <main class="admin-main">
        @yield('admin-content')
    </main>
 
</div>
 
<style>
.admin-wrapper { display: flex; min-height: 100vh; }
.admin-sidebar {
    width: 240px; min-height: 100vh;
    background: rgba(0,0,0,0.45);
    border-right: 1px solid rgba(255,255,255,0.1);
    display: flex; flex-direction: column; flex-shrink: 0;
}
.sidebar-brand {
    display: flex; align-items: center; gap: 10px;
    padding: 24px 20px; font-size: 16px; font-weight: 700; color: #fff;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}
.sidebar-icon { font-size: 20px; }
.sidebar-nav { flex: 1; padding: 20px 12px; display: flex; flex-direction: column; gap: 4px; }
.sidebar-section-label {
    font-size: 10px; font-weight: 700; letter-spacing: 0.1em;
    color: rgba(255,255,255,0.35); text-transform: uppercase;
    padding: 14px 8px 6px; margin: 0;
}
.sidebar-link {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 12px; border-radius: 8px;
    color: rgba(255,255,255,0.7); text-decoration: none;
    font-size: 14px; font-weight: 500; transition: 0.2s;
}
.sidebar-link:hover { background: rgba(255,255,255,0.1); color: #fff; }
.sidebar-link.active { background: #2a5298; color: #fff; }
.link-icon { font-size: 15px; width: 20px; text-align: center; }
.sidebar-footer { padding: 12px; border-top: 1px solid rgba(255,255,255,0.1); }
.admin-main { flex: 1; padding: 32px 40px; display: flex; flex-direction: column; gap: 24px; overflow-y: auto; }
@media (max-width: 768px) {
    .admin-wrapper { flex-direction: column; }
    .admin-sidebar { width: 100%; min-height: auto; }
    .admin-main { padding: 20px; }
}
</style>
 
@endsection
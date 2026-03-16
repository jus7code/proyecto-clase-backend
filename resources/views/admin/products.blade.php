@extends('layouts.admin')
 
@section('admin-content')
 
<div class="admin-topbar">
    <h1 class="admin-page-title">Productos</h1>
    <a href="{{ route('product.create') }}" class="btn-admin-primary">+ Nuevo producto</a>
</div>
 
@if(session('success'))
    <div class="admin-alert">{{ session('success') }}</div>
@endif
 
<div class="admin-table-wrapper">
    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="td-id">{{ $product->id }}</td>
                <td class="td-img">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <div class="no-img">Sin imagen</div>
                    @endif
                </td>
                <td class="td-name">{{ $product->name }}</td>
                <td class="td-price">${{ number_format($product->price, 2) }}</td>
                <td class="td-desc">{{ Str::limit($product->description, 60) }}</td>
                <td class="td-actions">
                    <a href="{{ route('product.show', $product->id) }}" class="action-btn action-view">Ver</a>
                    <a href="#" class="action-btn action-edit">Editar</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn action-delete"
                            onclick="return confirm('¿Eliminar {{ $product->name }}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
 
<!-- PAGINACIÓN -->
<div class="pagination-wrapper">
    <div class="pagination-inner">
        @if ($products->onFirstPage())
            <span class="page-btn page-btn-disabled">←</span>
        @else
            <a href="{{ $products->previousPageUrl() }}" class="page-btn">←</a>
        @endif
 
        @php $current = $products->currentPage(); $last = $products->lastPage(); @endphp
 
        @for ($i = 1; $i <= $last; $i++)
            @if ($i == 1 || $i == $last || abs($i - $current) <= 2)
                @if ($i == $current)
                    <span class="page-btn page-btn-active">{{ $i }}</span>
                @else
                    <a href="{{ $products->url($i) }}" class="page-btn">{{ $i }}</a>
                @endif
            @elseif ($i == $current - 3 || $i == $current + 3)
                <span class="page-dots">…</span>
            @endif
        @endfor
 
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="page-btn">→</a>
        @else
            <span class="page-btn page-btn-disabled">→</span>
        @endif
    </div>
</div>

@endsection
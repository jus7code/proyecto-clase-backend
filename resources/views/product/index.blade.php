@extends('layouts.app')

@section('content')
<main class="container-products">
 
    <h2 class="section-title">Nuestros Productos</h2>
 
    <!-- GRID DE PRODUCTOS -->
<div class="products-grid">
    @foreach ($milista as $product)
        <div class="product-card">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            <div class="product-info">
                <h3>{{ $product->name }}</h3>
                <p class="price">${{ $product->price }}</p>
                <p class="description">{{ $product->description }}</p>
                <span class="status activo">Activo</span>
                <div class="card-actions">
                    <a href="{{ route('product.show', $product->id) }}" class="btn-small">Ver Detalles</a>
                    <form action="{{ route('product.destroy', $product) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn-small btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
 
    <!-- PAGINACIÓN -->
    <div class="pagination-wrapper">
        <div class="pagination-inner">
 
            {{-- Botón anterior --}}
            @if ($milista->onFirstPage())
                <span class="page-btn page-btn-disabled">←</span>
            @else
                <a href="{{ $milista->previousPageUrl() }}" class="page-btn">←</a>
            @endif
 
            {{-- Números de página --}}
            @php
                $current = $milista->currentPage();
                $last    = $milista->lastPage();
                $delta   = 2; // páginas a mostrar a cada lado del actual
            @endphp
 
            @for ($i = 1; $i <= $last; $i++)
                @php
                    $showPage = $i == 1
                        || $i == $last
                        || abs($i - $current) <= $delta;
                    $showDotsBefore = $i == $current - $delta - 1 && $i > 2;
                    $showDotsAfter  = $i == $current + $delta + 1 && $i < $last;
                @endphp
 
                @if ($showDotsBefore || $showDotsAfter)
                    <span class="page-dots">…</span>
                @endif
 
                @if ($showPage)
                    @if ($i == $current)
                        <span class="page-btn page-btn-active">{{ $i }}</span>
                    @else
                        <a href="{{ $milista->url($i) }}" class="page-btn">{{ $i }}</a>
                    @endif
                @endif
            @endfor
 
            {{-- Botón siguiente --}}
            @if ($milista->hasMorePages())
                <a href="{{ $milista->nextPageUrl() }}" class="page-btn">→</a>
            @else
                <span class="page-btn page-btn-disabled">→</span>
            @endif
 
        </div>
    </div>
 
</main>
@endsection


@extends('layouts.app')
@section('content')
    <!-- CONTENIDO -->
<main class="detail-container">
 
    <div class="detail-card">
 
        <div class="detail-image">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
 
        <div class="detail-info">
            <h2>{{ $product->name }}</h2>
 
            <p class="detail-price">${{ $product->price }}</p>
 
            <span class="status activo">Activo</span>
 
            <p class="detail-description">
                {{ $product->description }}
            </p>
 
            <div class="detail-actions">
                <button class="btn">Comprar Ahora</button>
                <a href="{{ route('product.index') }}" class="btn-outline">Volver</a>
            </div>
        </div>
 
    </div>
 
</main>

@endsection

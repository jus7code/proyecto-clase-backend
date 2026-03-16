@extends('layouts.app')
 
@section('content')
 
<main class="detail-container">
 
    <div class="detail-card">
 
        <div class="detail-image">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
 
        <div class="detail-info">
            <h2>{{ $product->name }}</h2>
            <p class="detail-price">${{ $product->price }}</p>
            <span class="status activo">Activo</span>
            <p class="detail-description">{{ $product->description }}</p>
 
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="quantity-selector">
                    <button type="button" class="qty-btn" onclick="changeQty(-1)">−</button>
                    <input type="number" name="quantity" id="qty" value="1" min="1" max="99" class="qty-input">
                    <button type="button" class="qty-btn" onclick="changeQty(1)">+</button>
                </div>
                <div class="detail-actions">
                    <button type="submit" class="btn">Agregar al carrito 🛒</button>
                    <a href="{{ route('product.index') }}" class="btn-outline">Volver</a>
                </div>
            </form>
        </div>
 
    </div>
 
</main>
 <script>
function changeQty(delta) {
    const input = document.getElementById('qty');
    const val = parseInt(input.value) + delta;
    if (val >= 1 && val <= 99) input.value = val;
}
</script>
@endsection
@extends('layouts.app')
 
@section('content')
 
<main class="container-products">
 
    <h2 class="section-title">🛒 Tu carrito</h2>
 
    @if(empty($cart))
        <div class="cart-empty">
            <p>Tu carrito está vacío.</p>
            <a href="{{ route('product.index') }}" class="btn-small">Ver productos</a>
        </div>
    @else
        <div class="cart-wrapper">
 
            <div class="cart-table-wrapper">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($cart as $id => $item)
                            @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                            <tr>
                                <td class="cart-product">
                                    @if($item['image'])
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                                    @endif
                                    <span>{{ $item['name'] }}</span>
                                </td>
                                <td class="cart-price">${{ number_format($item['price'], 2) }}</td>
                                <td class="cart-qty">{{ $item['quantity'] }}</td>
                                <td class="cart-subtotal">${{ number_format($subtotal, 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cart-remove">✕</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
 
            <div class="cart-summary">
                <h3>Resumen</h3>
                <div class="summary-row">
                    <span>Productos</span>
                    <span>{{ array_sum(array_column($cart, 'quantity')) }}</span>
                </div>
                <div class="summary-row summary-total">
                    <span>Total</span>
                    <span>${{ number_format($total, 2) }}</span>
                </div>
                <button class="btn" style="width:100%; margin-top:20px;">Proceder al pago</button>
                <a href="{{ route('product.index') }}" class="btn-outline" style="width:100%; margin-top:10px; text-align:center; display:block;">Seguir comprando</a>
            </div>
 
        </div>
    @endif
 
</main>
@endsection
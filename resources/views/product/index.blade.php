@extends('layouts.app')

@section('content')
    <!-- CONTENIDO -->
    <main class="container-products">

        <h2 class="section-title">Nuestros Productos</h2>

        <div class="products-grid">

            <!-- PRODUCTO 1 -->
            <div class="product-card">


                <div class="container-products">

                    <h2 class="section-title">Productos</h2>

                    <div class="products-grid">
                        @foreach ($milista as $product)
                            <div class="product-card">
                                <img src="{{asset('storage/'.$product->image)}}" alt="">
                                <div class="product-info">
                                    <h3 class = "product_name"> {{$product->name}} </h3>
                                    <p class="price">{{$product->price}}</p>
                                    <p class="description">
                                        {{$product->description}}
                                    </p>
                                    <span class="status activo">Activo</span>
                                    <button class="btn-small" href="">Ver Detalles</button>
                                </div>
                            </div>

                            <!-- DUPLICA ESTA CARD PARA VER LA CUADRÍCULA -->
                        @endforeach
                    </div>

                </div>


            </div>



        </div>

    </main>
@endsection

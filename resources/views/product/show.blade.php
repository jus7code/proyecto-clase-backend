
@extends('layouts.app')
@section('content')
    <!-- CONTENIDO -->
    <main class="detail-container">

        <div class="detail-card">

            <div class="detail-image">
                <img src="https://source.unsplash.com/800x600/?laptop" alt="Producto">
            </div>

            <div class="detail-info">
                <h2>Laptop Gamer Pro X</h2>

                <p class="detail-price">$2.500.000</p>

                <span class="status activo">Activo</span>

                <p class="detail-description">
                    Esta laptop gamer cuenta con procesador de última generación,
                    16GB de RAM, tarjeta gráfica dedicada y almacenamiento SSD.
                    Ideal para gaming, diseño gráfico y trabajo profesional.
                </p>

                <div class="detail-actions">
                    <button class="btn">Comprar Ahora</button>
                    <button class="btn-outline">Volver</button>
                </div>
            </div>

        </div>

    </main>

@endsection

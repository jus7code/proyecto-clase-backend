@extends('layouts.app')
    
@section('content')
<!-- CONTENIDO -->
    <main class="container">
        <div class="card">
            <h2>Crear Nuevo Producto</h2>

            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nombre del Producto</label>
                    <input type="text" name="nombre" placeholder="Ej: Laptop Gamer" required>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="precio" placeholder="Ej: 2500" step="0.01" required>
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea name="descripcion" rows="4" placeholder="Descripción detallada del producto..." required></textarea>
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input type="file" name="imagen" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <select name="estado" required>
                        <option value="">Seleccione un estado</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>

                <button type="submit" class="btn">Guardar Producto</button>

            </form>
        </div>
    </main>

@endsection
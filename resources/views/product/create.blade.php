@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="card">
            <h2>Crear Nuevo Producto</h2>
            @if ($errors->any())
                @foreach($errors->all() as $error)
                <li> {{$error}} </li>
                @endforeach
            @endif
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nombre del Producto</label>
                    <input value=" {{old('nombre')}}" type="text" name="nombre" placeholder="Ej: Laptop Gamer" >
                </div>

                <!-- LISTA DESPLEGABLE -->
                <div class="form-group">
                    <label>Categoría</label>
                    <select name="categoria" >
                        <option value="" selected disabled>Seleccione una opción</option>

                        @foreach ($misCategorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input  type="number" name="precio" placeholder="Ej: 2500" step="0.01" value="{{old('precio')}}">
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea name="descripcion" rows="4" placeholder="Descripción detallada del producto...">value="{{old('descripcion')}}</textarea>
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input type="file" name="imagen" accept="image/*">
                </div>

                <button type="submit" class="btn">Guardar Producto</button>


            </form>
           

        </div>
    </main>
@endsection

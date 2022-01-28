@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Producto</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form 
                            action="{{ route('products.update', $product) }}"
                            method="POST"
                            >
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name">Nombre</label>
                              <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $product->name) }}">
                            </div>
                            <div class="form-group">
                                <label for="referencia">Referencia</label>
                                <input type="text" name="referencia" id="referencia" class="form-control" required value="{{ old('referencia', $product->referencia) }}">
                              </div>
                              <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number"
                                  class="form-control" name="precio" id="precio" required value="{{ old('precio', $product->precio) }}">
                              </div>
                              <div class="form-group">
                                <label for="peso">Peso</label>
                                <input type="number"
                                  class="form-control" name="peso" id="peso" required value="{{ old('peso', $product->peso) }}">
                              </div>
                              <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input type="text"
                                  class="form-control" name="categoria" id="categoria" required value="{{ old('categoria', $product->categoria) }}">
                              </div>
                              <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number"
                                  class="form-control" name="stock" id="stock" value="{{ old('stock', $product->stock) }}">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Producto</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('products.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="name">Nombre</label>
                              <input type="text" name="name" id="name" class="form-control" required placeholder="Nombre del producto" aria-describedby="name">
                            </div>
                            <div class="form-group">
                              <label for="referencia">Referencia</label>
                              <input type="text" name="referencia" id="referencia" class="form-control" required placeholder="Referencia del producto" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="precio">Precio</label>
                              <input type="number"
                                class="form-control" name="precio" id="precio" aria-describedby="precio" required placeholder="precio del producto">
                            </div>
                            <div class="form-group">
                              <label for="peso">Peso</label>
                              <input type="number"
                                class="form-control" name="peso" id="peso" aria-describedby="helpId" required placeholder="Peso del producto">
                            </div>
                            <div class="form-group">
                              <label for="categoria">Categoria</label>
                              <input type="text"
                                class="form-control" name="categoria" id="categoria" aria-describedby="categoria" required placeholder="Categoria">
                            </div>
                            <div class="form-group">
                              <label for="stock">Stock</label>
                              <input type="number"
                                class="form-control" name="stock" id="stock" aria-describedby="stock" placeholder="Cantidad del producto">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>    
@endsection
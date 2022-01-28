@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        Lista de productos
                        <a 
                            href="{{ route('products.create') }}" 
                            class="btn btn-primary btn-sm float-right">Nuevo</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Referencia</th>
                                <th>precio</th>
                                <th>Peso</th>
                                <th>Categoría</th>
                                <th>Stock</th>
                                <th colspan="2">&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->referencia }}</td>
                                        <td>{{ $product->precio }}</td>
                                        <td>{{ $product->peso }}</td>
                                        <td>{{ $product->categoria }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td> <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Editar</a> </td>
                                        <td>
                                            <form action="{{ route('products.destroy', $product) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <input 
                                                    type="submit" 
                                                    value="Eliminar"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Desea Eliminar el producto?')">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
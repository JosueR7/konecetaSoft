@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('venta.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="idProducto">Id del Producto</label>
                                <input id="idProducto" class="form-control" type="number" name="product_id">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad Vendida</label>
                                <input id="cantidad" class="form-control" type="number" name="stock_vendido">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection
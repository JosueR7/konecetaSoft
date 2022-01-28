@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="idProducto">Producto</label>
                                <input id="idProducto" class="form-control" type="number" name="producto_id">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="number" name="cantidad">
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
<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

use App\Models\Products;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action('${App\Http\Controllers\VentaController@create}');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Products::find($request->product_id);

        if($product == null) {
            return back()->with('status', 'Producto no existe');
        }elseif ($product->stock > 0) {
            $venta = Venta::create($request->all());
            $product->stock = $product->stock - $venta->stock_vendido;
            if ($product->stock < 0) {
                return back()->with('status', 'Venta No se puede Registrar, Producto con cantidades insuficientes');
            }else {
                $product->update($request->all());
            }
            

            return back()->with('status', 'Venta Registrada con exito');
        }else {
            return back()->with('status', 'Producto sin Stock');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'stock_vendido'
    ];

    public function product(){
        return $this->belongsTo(Products::class);
    }
}

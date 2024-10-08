<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    //relacion con comprador
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    //relacion con producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

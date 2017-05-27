<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComboProduct extends Model
{
    protected $fillable = [
        'id',
        'combo_id',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }
}

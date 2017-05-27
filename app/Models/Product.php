<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'status',
        'service_id',
        'description',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function comboProduct()
    {
        return $this->belongsTo(comboProduct::class);
    }

    public function name($option = false)
    {
        if ($option) {
            return str_limit($this->attributes['name'], config('settings.length_title_default'));
        }

        return $this->attributes['name'];
    }
}

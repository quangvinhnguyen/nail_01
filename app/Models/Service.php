<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id',
        'title',
        'active',
    ];

    public function title($option = false)
    {
        if (!$option) {
            return str_limit($this->attributes['title'], config('settings.length_title_default'));
        }

        return $this->attributes['title'];
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

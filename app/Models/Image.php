<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id',
        'url',
        'target_type',
        'target_id',
    ];

    public function url()
    {
        #url
    }

    public function target()
    {
        return $this->morphTo();
    }
}

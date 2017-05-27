<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
    ];

    public function title($option = false)
    {
        if (!$option) {
            return str_limit($this->attributes['title'], config('settings.length_title_default'));
        }

        return $this->attributes['title'];
    }

    public function content($option = false)
    {
        if (!$option) {
            return str_limit($this->attributes['title'], config('settings.length_title_default'));
        }

        return $this->attributes['title'];
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'id',
        'tag',
        'title',
        'description',
        'status',
        'deadline',
    ];

    public function comboEvent()
    {
        return $this->hasMany(ComboEvet::class);
    }

    public function title($option = false)
    {
        if (!$option) {
            return str_limit($this->attributes['title'], config('settings.length_title_default'));
        }

        return $this->attributes['title'];
    }

    public function description($option = false)
    {
        if (!$option) {
            return str_limit($this->attributes['description'], config('settings.length_title_default'));
        }

        return $this->attributes['description'];
    }

    public function isOpen()
    {
        return Carbon::parse($this->attributes['deadline'])->gt(Carbon::now());
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }

    public function combos()
    {
        return $this->belongsToMany(Combo::class);
    }
}

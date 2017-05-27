<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComboEvent extends Model
{
    protected $fillable = [
        'id',
        'combo_id',
        'event_id',
    ];

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

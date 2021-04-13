<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rakka extends Model
{
    protected $fillable = [
        'sarr', 'nombre','nafila_id'
    ];

    public function nafila(){
        return $this->belongsTo(Nafila::class);
    }
}

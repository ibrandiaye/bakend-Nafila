<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nafila extends Model
{
    protected $fillable = [
        'jour', 'commentaire'
    ];
    public function rakkas(){
        return $this->hasMany(Rakka::class);
    }
}

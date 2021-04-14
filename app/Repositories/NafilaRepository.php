<?php
namespace App\Repositories;

use App\Nafila;
use App\Repositories\RessourceRepository;

class NafilaRepository extends RessourceRepository{

    public function __construct(Nafila $nafila){
        $this->model = $nafila;
    }

    public function getLastNafila(){

        return Nafila::with('rakkas')
        ->orderBy('id','desc')
        ->limit(1)
        ->get();
    }

}

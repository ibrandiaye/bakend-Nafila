<?php
namespace App\Repositories;

use App\Nafila;
use App\Repositories\RessourceRepository;

class NafilaRepository extends RessourceRepository{

    public function __construct(Nafila $nafila){
        $this->model = $nafila;
    }

}

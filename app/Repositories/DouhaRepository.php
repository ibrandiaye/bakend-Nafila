<?php
namespace App\Repositories;

use App\Douha;
use App\Repositories\RessourceRepository;

class DouhaRepository extends RessourceRepository{

    public function __construct(Douha $douha){
        $this->model = $douha;
    }



}

<?php
namespace App\Repositories;

use App\Rakka;
use App\Repositories\RessourceRepository;

class RakkaRepository extends RessourceRepository{

    public function __construct(Rakka $rakka){
        $this->model = $rakka;
    }


}

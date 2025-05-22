<?php

namespace App\Repositories;

use App\Models\Countrie;

class CountrieRepository implements CountrieRepositoryInterface {

    public function __construct() {

    }

    public function getAllCountries() {
        return Countrie::All();
    }

}
<?php

namespace  App\Services;

use App\Repositories\CityRepositoryInterface;

class CityService {

    private CityRepositoryInterface $cityRepository;

    public function __construct(CityRepositoryInterface $cityRepository) {
        $this->cityRepository = $cityRepository;
    }

    public function getCityByCountrie($idCountrie){
        return $this->cityRepository->getCityByCountrie($idCountrie);
    }
}
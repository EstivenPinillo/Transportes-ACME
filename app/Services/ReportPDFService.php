<?php

namespace App\Services;

use App\Repositories\ReportPDFRepositoryInterface;

class ReportPDFService {

    private ReportPDFRepositoryInterface $reportPDFRepository;

    public function __construct(ReportPDFRepositoryInterface $reportPDFRepository) {
        $this->reportPDFRepository = $reportPDFRepository;
    }

    public function reportCompany(){
        return $this->reportPDFRepository->reportCompany();
    }

}
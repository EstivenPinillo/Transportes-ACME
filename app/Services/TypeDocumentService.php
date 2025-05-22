<?php

namespace App\Services;

use App\Repositories\TypeDocumentRepositoryInterface;

class TypeDocumentService {

    private TypeDocumentRepositoryInterface $typeDocumentRepository;

    public function __construct(TypeDocumentRepositoryInterface $typeDocumentRepository){
        $this->typeDocumentRepository = $typeDocumentRepository;
    }

    public function index(){
        return $this->typeDocumentRepository->index();
    }

}

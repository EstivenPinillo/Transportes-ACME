<?php

namespace App\Repositories;

use App\Models\TypeDocument;

class TypeDocumentRepository implements TypeDocumentRepositoryInterface {

    
    public function index() {
        return TypeDocument::All();
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeDocumentRequest;
use App\Http\Requests\UpdateTypeDocumentRequest;
use App\Models\TypeDocument;
use App\Services\TypeDocumentService;

class TypeDocumentController extends Controller
{

    private TypeDocumentService $typeDocumentService;

    public function __construct(TypeDocumentService $typeDocumentService) {
        $this->typeDocumentService = $typeDocumentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->typeDocumentService->index();
    }

}

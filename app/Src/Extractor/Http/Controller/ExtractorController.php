<?php

namespace Src\Extractor\Http\Controller;

use Src\Extractor\Services\ExtractorService;
use Illuminate\Http\Request;

class ExtractorController {

    public function __construct (ExtractorService $service) {
        $this->extractorService = $service;
    }

    public function create (Request $request) {        
        return $this->extractorService->create($request->all());
    }
}
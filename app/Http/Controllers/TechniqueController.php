<?php

namespace App\Http\Controllers;

use App\Http\Requests\Technique\StoreTechniqueRequest;
use App\Repositories\TechniqueRepository\Dto\StoreTechniqueDto;
use App\Repositories\TechniqueRepository\TechniqueRepository;

class TechniqueController extends Controller
{
    private $techniqueRepository;

    public function __construct(TechniqueRepository $techniqueRepository)
    {
        $this->techniqueRepository = $techniqueRepository;
    }

    public function create()
    {
        return view('technique.create');
    }

    public function store(StoreTechniqueRequest $request)
    {
        $validated = $request->validated();

        $storeTechniqueDto = new StoreTechniqueDto();
        $storeTechniqueDto->setDescription($validated['description']);

        $this->techniqueRepository->store($storeTechniqueDto);
    }
}

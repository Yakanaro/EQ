<?php

namespace App\Repositories\TechniqueRepository;

use App\Models\Technique;
use App\Repositories\TechniqueRepository\Dto\StoreTechniqueDto;

class TechniqueRepository implements TechniqueRepositoryInterface
{
    public function store(StoreTechniqueDto $storeTechniqueDto): void
    {
        $technique = new Technique();
        $technique->description = $storeTechniqueDto->getDescription();
        $technique->save();
    }
}

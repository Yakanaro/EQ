<?php

namespace App\Repositories\TechniqueRepository;

use App\Repositories\TechniqueRepository\Dto\StoreTechniqueDto;

interface TechniqueRepositoryInterface
{
    public function store(StoreTechniqueDto $storeTechniqueDto): void;
}

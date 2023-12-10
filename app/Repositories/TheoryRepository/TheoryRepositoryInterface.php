<?php

namespace App\Repositories\TheoryRepository;

use App\Repositories\TheoryRepository\Dto\StoreTheoryDto;
use App\Repositories\TheoryRepository\Dto\UpdateTheoryDto;
use App\Models\Theory;

interface TheoryRepositoryInterface
{
    public function store(StoreTheoryDto $storeTheoryDto): void;

    public function update(Theory $theory, UpdateTheoryDto $updateTheoryDto): void;

    public function findById(int $id): ?Theory;
}

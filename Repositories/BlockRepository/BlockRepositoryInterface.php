<?php

namespace App\Repositories\BlockRepository;

use App\Models\Block;
use App\Repositories\BlockRepository\Dto\StoreBlockDto;
use App\Repositories\BlockRepository\Dto\UpdateBlockDto;
use Illuminate\Support\Collection;

interface BlockRepositoryInterface
{
    public function store(StoreBlockDto $storeBlockDto): void;

    public function update(Block $block, UpdateBlockDto $updateBlockDto): void;

    public function findById(int $id): ?Block;

    public function getAll(): Collection;
}


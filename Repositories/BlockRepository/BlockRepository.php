<?php

namespace App\Repositories\BlockRepository;

use App\Repositories\BlockRepository\Dto\StoreBlockDto;
use App\Models\Block;
use App\Repositories\BlockRepository\Dto\UpdateBlockDto;
use Illuminate\Database\Eloquent\Collection;

class BlockRepository implements BlockRepositoryInterface
{
    public function __construct(
        private readonly Block $blockModel,
    )
    {
    }

    public function store(StoreBlockDto $storeBlockDto): void
    {
        $data = [
            'title' => $storeBlockDto->getTitle(),
            'description' => $storeBlockDto->getDescription(),
        ];
        
        $block = new Block();
        $block->fill($data);
        $block->save();
    }

    public function update(Block $block, UpdateBlockDto $updateBlockDto): void
    {
        $block = $this->findById($block->id);
        
        $data = [
            'title' => $updateBlockDto->getTitle(),
            'description' => $updateBlockDto->getDescription(),
        ];
        
        $block->update($data);
    }
    
    public function findById(int $id): ?Block
    {
        $block = $this->blockModel::query()->where('id', '=', $id)->first();
        
        if (!$block) {
            throw new \Exception('Model not found');
        }
        
        return $block;
    }

    public function getAll(): Collection
    {
        return $this->blockModel->getAll();
    }

    public function getBlockById(int $id): Block
    {
        return $this->findById($id);
    }
}

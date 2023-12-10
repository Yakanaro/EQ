<?php

namespace App\Repositories\TheoryRepository;

use App\Repositories\TheoryRepository\TheoryRepositoryInterface;
use App\Models\Theory;
use App\Repositories\TheoryRepository\Dto\StoreTheoryDto;
use App\Repositories\TheoryRepository\Dto\UpdateTheoryDto;

class TheoryRepository implements TheoryRepositoryInterface
{
    public function __construct(
        private readonly Theory $theoryModel,
    )
    {
    }

    public function store(StoreTheoryDto $storeTheoryDto): void
    {
        $data = [
            'block_id' => $storeTheoryDto->getBlockId(),
            'theory_content' => $storeTheoryDto->getTheoryContent(),
            'assignment' => $storeTheoryDto->getAssignment(),
        ];
        
        $theory = new Theory();
        $theory->fill($data);
        $theory->save();
    }

    public function update(Theory $theory, UpdateTheoryDto $updateTheoryDto): void
    {
        $theory = $this->findById($theory->id);
        
        $data = [
            'block_id' => $updateTheoryDto->getBlockId(),
            'theory_content' => $updateTheoryDto->getTheoryContent(),
            'assignment' => $updateTheoryDto->getAssignment(),
        ];
        
        $theory->update($data);
    }
    
    public function findById(int $id): ?Theory
    {
        $theory = $this->theoryModel::query()->where('id', '=', $id)->first();
        
        if (!$theory) {
            throw new \Exception('Model not found');
        }
        
        return $theory;
    }
}

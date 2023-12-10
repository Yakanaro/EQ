<?php

namespace App\Repositories\TheoryRepository\Dto;

class UpdateTheoryDto
{
    private ?string $theoryContent;
    private ?string $assignment;
    private ?int $blockId;
    
    public function getTheoryContent(): ?string
    {
        return $this->theoryContent;
    }
    
    public function setTheoryContent(?string $theoryContent): self
    {
        $this->theoryContent = $theoryContent;
        
        return $this;
    }
    
    public function getAssignment(): ?string
    {
        return $this->assignment;
    }
    
    public function setAssignment(?string $assignment): self
    {
        $this->assignment = $assignment;
        
        return $this;
    }
    
    public function getBlockId(): ?int
    {
        return $this->blockId;
    }
    
    public function setBlockId(?int $blockId): self
    {
        $this->blockId = $blockId;
        
        return $this;
    }
}


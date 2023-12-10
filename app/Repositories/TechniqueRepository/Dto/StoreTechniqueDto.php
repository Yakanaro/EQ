<?php

namespace App\Repositories\TechniqueRepository\Dto;
class StoreTechniqueDto
{
    private string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}

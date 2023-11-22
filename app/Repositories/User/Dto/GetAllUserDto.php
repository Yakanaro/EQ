<?php

namespace App\Repositories\User\Dto;

class GetAllUserDto
{
    private ?string $name;
    private ?string $surname;
    private ?int $age;
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function setName(?string $name): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    
    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        
        return $this;
    }
    
    public function getAge(): ?int
    {
        return $this->age;
    }
    
    public function setAge(?int $age): self
    {
        $this->age = $age;
        
        return $this;
    }
}
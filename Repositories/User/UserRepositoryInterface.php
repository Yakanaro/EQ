<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\User\Dto\GetAllUserDto;
use App\Repositories\User\Dto\CreateUserDto;
use App\Repositories\User\Dto\UpdateUserDto;

interface UserRepositoryInterface
{
    public function findById(int $id): User;
    
    public function getAll(GetAllUserDto $getAllUserDto): Collection;
    
    public function update(UpdateUserDto $updateUserDto): void;
}




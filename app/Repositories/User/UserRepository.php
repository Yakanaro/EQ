<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\Dto\GetAllUserDto;
use App\Repositories\User\Dto\UpdateUserDto;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly User $userModel,
    )
    {
    }

    public function findById(int $id): User
    {
        $user = User::query()->where('id', '=', $id)->first();
        
        if ($user === null) {
            throw new ModelNotFoundException("User not found");
        }
        
        return $user;
    }

    public function getAll(GetAllUserDto $getAllUserDto): Collection
    {
        return $this->userModel->getAll();
    }

    public function update(UpdateUserDto $updateUserDto): void
    {
        $user = $this->findById($updateUserDto->getId());
        
        $data = [
            'name' => $updateUserDto->getName(),
            'surname' => $updateUserDto->getSurname(),
            'age' => $updateUserDto->getAge(),
            'email' => $updateUserDto->getEmail(),
        ];
        
        $user->fill($data);
        
        $user->save();
    }
}

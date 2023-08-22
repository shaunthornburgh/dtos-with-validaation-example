<?php

namespace App\Repositories;

use App\DTO\RegisterUserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param RegisterUserDTO $userDTO
     * @return User
     */
    public function create(RegisterUserDTO $userDTO): User
    {
        return User::firstOrCreate(
            [
                'email' => $userDTO->getEmail()
            ],
            [
                'name' => $userDTO->getName(),
                'email' => $userDTO->getEmail(),
                'password' => Hash::make($userDTO->getPassword()),
            ]
        );
    }
}

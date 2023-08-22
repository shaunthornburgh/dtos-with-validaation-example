<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DTO\RegisterUserDTO;

interface UserRepositoryInterface
{
    public function create(RegisterUserDTO $userDTO);
}

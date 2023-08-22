<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepositoryInterface;

class UserAccountController extends Controller
{
    public function __construct(
        public UserRepositoryInterface $userRepository,
    ) {
    }

    public function store(RegisterUserRequest $request): UserResource
    {
        return new UserResource($this->userRepository->create($request->data()));
    }
}

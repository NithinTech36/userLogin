<?php

namespace App\Actions;
use App\Repositories\User\UserRespositoryInterface;

class CreateUserAction
{
    /**
     * Create a new class instance.
     */
    protected $repository;

    public function __construct(UserRespositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(array $userData)
    {
           return $this->repository->createUser($userData);
    }
}

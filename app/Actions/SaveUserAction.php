<?php

namespace App\Actions;
use App\Repositories\User\UserRespositoryInterface;

class SaveUserAction
{
    /**
     * Create a new class instance.
     */
    protected $repository;

    public function __construct(UserRespositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute( array $userData, $userId = 0)
    {
        return $userId !== 0 ? $this->repository->updateUser($userId, $userData) : $this->repository->createUser($userData);
    }
}



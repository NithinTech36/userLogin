<?php

namespace App\Repositories\User;

interface UserRespositoryInterface
{
    public function getAllUsers();

    public function getUserById($id);

    public function createUser(array $data);

    public function updateUser($id, array $data);

}

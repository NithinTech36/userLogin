<?php 
namespace App\Repositories\User;
use App\Models\User\Userwellnessinterest;

class UserWellnessRespository implements UserWellnessRespositoryInterface
{
    public function createUserWellness(array $userData)
    {
        return Userwellnessinterest::create($userData);
    }
}

<?php
namespace App\Repositories\User;
use App\Models\User\Userwellnesspillars;

class UserWellnessPillarsRespository implements UserWellnessPillarsRespositoryInterface
{
    public function createUserWellnessPillar(array $userData)
    {
        return Userwellnesspillars::create($userData);
    }
}

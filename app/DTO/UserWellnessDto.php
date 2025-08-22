<?php 

namespace App\DTO;

class UserWellnessDto
{
    public int $user_id;
    public int $wellness_id;


    public function __construct(int $user_id, int $wellness_id) {
        $this->user_id = $user_id;
        $this->wellness_id = $wellness_id;

    }

}

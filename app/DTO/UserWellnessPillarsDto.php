<?php

namespace App\DTO;

class UserWellnessPillarsDto
{
    public int $user_id;

    public int $pillar_id;

    public function __construct(int $user_id, int $pillar_id) {
        $this->user_id = $user_id;
        $this->pillar_id = $pillar_id;
    }
}

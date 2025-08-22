<?php

namespace App\Repositories\Wellnesspillars;

interface WellnesspillarsRespositoryInterface
{
    public function getAllWellnesspillars();

    public function getWellnesspillarById($id);

    public function createWellnesspillars(array $data);

}

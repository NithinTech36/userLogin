<?php 
namespace App\Repositories\Wellnesspillars;
use App\Models\wellnesspillars\Wellnesspillars;

class WellnesspillarsRespository implements WellnesspillarsRespositoryInterface
{
    public function getAllWellnesspillars()
    {
        return Wellnesspillars::all();
    }

    public function getWellnesspillarById($id)
    {
        return Wellnesspillars::find($id);
    }

    public function createWellnesspillars(array $data)
    {
        return Wellnesspillars::insert($data);
    }
}

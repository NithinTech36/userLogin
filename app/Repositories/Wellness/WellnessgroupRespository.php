<?php

namespace App\Repositories\Wellness;
use App\Models\wellness\Wellnessgroups;
class WellnessgroupRespository implements WellnessgroupRepositoryInterface
{
    public function getAllWellnessGroups()
    {
        // Implementation
        return Wellnessgroups::all();
    }

    public function getAllWellnessGroupsWithInterests()
    {
        // Implementation
        return Wellnessgroups::with('interests')->get();
    }


    public function createListsOfWellnessGroups(array $data)
    {
        // Implementation
        return Wellnessgroups::insert($data);
    }
}

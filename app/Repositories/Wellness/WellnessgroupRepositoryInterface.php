<?php 

namespace App\Repositories\Wellness;
use App\Models\wellness\Wellnessgroups;
interface WellnessgroupRepositoryInterface
{
    public function getAllWellnessGroups();
    public function getAllWellnessGroupsWithInterests();
    public function createListsOfWellnessGroups(array $data);
}


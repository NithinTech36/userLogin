<?php

namespace App\Repositories\Wellness;
use App\Models\wellness\Wellnessinterests;

class WellnessinterestsRepository implements WellnessinterestsRepositoryInterface {
    // Implement methods related to wellness interests here
    public function createLists(array $data): bool {
        return Wellnessinterests::insert($data);
        
    }
}

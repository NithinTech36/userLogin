<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\Wellness\WellnessgroupRepositoryInterface;
use  App\Repositories\Wellness\WellnessinterestsRepositoryInterface;

class WellnessinterestsSeeder extends Seeder
{
       protected $WellnessinterestsRepository;
       protected $WellnessgroupRepository;
    public function __construct(WellnessinterestsRepositoryInterface $WellnessinterestsRepository, WellnessgroupRepositoryInterface $WellnessgroupRepository)
    {
        $this->WellnessinterestsRepository = $WellnessinterestsRepository;
        $this->WellnessgroupRepository = $WellnessgroupRepository;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wellnessGroups = $this->WellnessgroupRepository->getAllWellnessGroups();

        foreach ($wellnessGroups as $group) {
            switch ($group->name) {
                case 'Individual Sports':
                    $this->WellnessinterestsRepository->createLists([
                        [
                            'wellness_group_id' => $group->id,
                            'name' => 'Sample Interest',
                        ],
                        [
                            'wellness_group_id' => $group->id,
                            'name' => 'Another Sample Interest',
                        ],
                   ]);
                   break;
                case 'Ball Sports':
                    $this->WellnessinterestsRepository->createLists([
                        [
                            'wellness_group_id' => $group->id,
                            'name' => 'Sample Interest',
                        ],
                        [
                            'wellness_group_id' => $group->id,
                            'name' => 'Another Sample Interest',
                        ],
                   ]);
                   break;
            }
        }
    }
}

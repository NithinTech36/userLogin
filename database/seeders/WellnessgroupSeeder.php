<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wellnessgroup;
use App\Repositories\Wellness\WellnessgroupRepositoryInterface;

class WellnessgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $repository;
    public function __construct(WellnessgroupRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run(): void
    {
        //
        // You can seed the wellness groups here.
        //Wellnessgroup::factory(10)->create();

        // Individual, Meditation, Fitness, Nutrition using repository
        $this->repository->createListsOfWellnessGroups([
            ['name' => 'Individual Sports'],
            ['name' => 'Ball Sports'],
            ['name' => 'Wheel Sports'],
            ['name' => 'Compact Sports'],
        ]);
    }
}

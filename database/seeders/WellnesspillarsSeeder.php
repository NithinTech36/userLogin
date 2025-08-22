<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\Wellnesspillars\WellnesspillarsRespositoryInterface;

class WellnesspillarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $repository;

    public function __construct(WellnesspillarsRespositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run(): void
    {
        $this->repository->createWellnesspillars([
            ['name' => 'Physical Wellness'],
            ['name' => 'Emotional Wellness'],
            ['name' => 'Social Wellness'],
            ['name' => 'Spiritual Wellness'],
            ['name' => 'Intellectual Wellness'],
        ]);
    }
}

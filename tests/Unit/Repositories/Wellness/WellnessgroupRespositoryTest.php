<?php

namespace Tests\Unit\Repositories\Wellness;

use Tests\TestCase;
use App\Repositories\Wellness\WellnessgroupRespository;
use App\Models\wellness\Wellnessgroups;
use Mockery;

class WellnessgroupRespositoryTest extends TestCase
{
    protected $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new WellnessgroupRespository();
    }

    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_lists_of_wellness_groups_returns_true()
    {
        $data = [
            ['name' => 'Group 1'],
            ['name' => 'Group 2'],
        ];

        // Use Mockery alias for static method mocking
        Mockery::mock(['alias:App\Models\wellness\Wellnessgroups'])
            ->shouldReceive('insert')
            ->with($data)
            ->andReturn(true);

        $result = $this->repository->createListsOfWellnessGroups($data);

        $this->assertTrue($result);
        $this->assertDatabaseHas('wellnessgroups', ['name' => 'Group 1']);
    }
}
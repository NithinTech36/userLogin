<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\User\UserRespositoryInterface;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $repository;

    public function __construct(UserRespositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run(): void
    {
        //
        // You can seed the users here
        $this->repository->createUser(
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password'), 'is_admin' => true],
        );

    }
}



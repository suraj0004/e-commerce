<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
        ]);

        //Admin
        User::factory()
            ->state([
                "role_id" => User::ROLES["ADMIN"],
                "status" => User::STATUS["ACTIVE"],
                "email" => "admin@gmail.com",
            ])->create();

        // users
        User::factory()
            ->count(5)
            ->state([
                "role_id" => User::ROLES["USER"],
                "status" => User::STATUS["ACTIVE"],
            ])
            ->create();
    }
}

<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            [
                "role" => "admin",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "role" => "user",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}

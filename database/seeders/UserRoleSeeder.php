<?php

namespace Database\Seeders;

use App\Models\userRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserRole::factory()->count(10)->create();
    }
}

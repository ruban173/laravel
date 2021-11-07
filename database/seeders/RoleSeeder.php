<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'user',
            'manager',
            'admin',

        ];

            DB::table('roles')->insert([
                ['name' => $roles[0]],
                ['name' => $roles[1]],
                ['name' => $roles[2]]
                ]);

    }
}

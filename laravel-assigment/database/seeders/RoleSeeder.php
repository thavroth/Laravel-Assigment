<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

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
            ['name' => 'Department Admin'],
            ['name' => 'CEO'],
            ['name' => 'HR Manager'],
            ['name' => 'Team Leader'],
            ['name' => 'CFO'],
            ['name' => 'System Admin'],
        ];

        Role::insert($roles);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            ['name' => 'Sales'],
            ['name' => 'Executive'],
            ['name' => 'Management'],
            ['name' => 'IT'],

        ];

        Department::insert($department);
    }
}

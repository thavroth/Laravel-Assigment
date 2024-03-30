<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::factory()->count(10)->create();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'thavroth.chea@gmail.com',
                'phone_number' => '0712827016',
                'password' => bcrypt('12345678'),
                'role_id' => 1,
                'department_id' => 1,
            ],
        ];

        User::insert($users);
    }
}

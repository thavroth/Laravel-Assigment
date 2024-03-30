<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => 'Approved'],
            ['name' => 'Rejected'],
            ['name' => 'Pending'],
            ['name' => 'To Approve'],
        ];

        Status::insert($status);
    }
}

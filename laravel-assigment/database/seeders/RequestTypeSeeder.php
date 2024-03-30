<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequestType;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $request_type = [
            ['name' => 'Leave'],
            ['name' => 'Mission']
        ];

        RequestType::insert($request_type);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        Status::create(['name' => 'Open']);
        Status::create(['name' => 'Considering']);
        Status::create(['name' => 'In progress']);
        Status::create(['name' => 'Implemented']);
        Status::create(['name' => 'Closed']);
    }
}

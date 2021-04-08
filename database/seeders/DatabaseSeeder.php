<?php

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Idea::factory(15)->create();
    }
}

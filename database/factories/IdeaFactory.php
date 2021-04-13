<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdeaFactory extends Factory
{
    protected $model = Idea::class;

    public function definition(): array
    {
        $statusesCount = Status::count();

        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'status_id' => $statusesCount ?  rand(1, $statusesCount) : Status::factory(),
            'title' => ucwords($this->faker->words(4, true)),
            'description' => $this->faker->paragraph(5),
        ];
    }
}

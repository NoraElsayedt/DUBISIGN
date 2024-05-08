<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            // Define your task attributes here
            'title' => fake()->name,
            'description' => fake()->text,
          
            'assigned_to_id' => 1,
            'assigned_by_id' =>1,
            // Add more attributes as needed
        ];
    }
}

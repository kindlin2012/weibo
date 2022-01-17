<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//重要:引入模型
use App\Models\Status;

class StatusFactory extends Factory
{
    protected $model = Status::class;

    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            'user_id'    => $this->faker->randomElement(['1','2','3']),
            'content'    => $this->faker->text(),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\MemberMain;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberMainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = MemberMain::class;

    public function definition()
    {
        return [
            'username'    => $this->faker->unique()->userName(),
            'password'    => \Hash::make('12345678'),
            'balance'     => rand(100000, 1000000),
            'status'      => rand(0, 1),
            'level_id'    => rand(1, 4),
            'depo_l'      => rand(100000, 1000000),
            'user_u'      => $this->faker->name(),
            'upline_user' => $this->faker->name(),
        ];
    }
}

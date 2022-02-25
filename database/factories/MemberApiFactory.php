<?php

namespace Database\Factories;

use App\Models\MemberApi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberApiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = MemberApi::class;

    public function definition()
    {
        return [
            'provider_id'    => rand(1, 100),
            'user_api'       => \Str::random(20),
            'balance'        => rand(10000, 1000000),
            'is_active'      => 1,
            'token'          => \Str::random(20),
            'turnover_bonus' => rand(10000, 1000000)
        ];
    }
}

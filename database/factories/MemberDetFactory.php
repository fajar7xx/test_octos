<?php

namespace Database\Factories;

use App\Models\MemberDet;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberDetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = MemberDet::class;

    public function definition()
    {
        return [
            'fullname'  => $this->faker->name(),
            'email'     => $this->faker->unique()->safeEmail(),
            'phone'     => $this->faker->unique()->phoneNumber(),
            'bank_acc'  => $this->faker->name(),
            'bank_num'  => $this->faker->creditCardNumber(),
            'bank_name' => $this->faker->creditCardType(),
            'login_l'   => now(),
        ];
    }
}

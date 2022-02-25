<?php

namespace Database\Factories;

use App\Models\MemberAccounting;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberAccountingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = MemberAccounting::class;

    public function definition()
    {
        return [
            'sum_depo'       => rand(10000, 1000000),
            'count_depo'     => rand(1, 100),
            'sum_wd'         => rand(10000, 1000000),
            'count_wd'       => rand(1, 100),
            'sum_referral'   => rand(10000, 1000000),
            'count_referral' => rand(1, 100),
            'sum_rebate'     => rand(10000, 1000000),
            'count_rebate'   => rand(1, 100),
        ];
    }
}

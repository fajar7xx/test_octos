<?php

namespace Database\Seeders;

use App\Models\MemberMain;
use Illuminate\Database\Seeder;

class MemberMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberMain::factory()->count(100)->create();
    }
}

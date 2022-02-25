<?php

namespace Database\Seeders;

use App\Models\MemberAccounting;
use App\Models\MemberApi;
use App\Models\MemberDet;
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
        // $memberAccountings = MemberAccounting::factory()->count(100)->create();
        // $memberApis = MemberApi::factory()->count(100)->create();
        // $memberDets = MemberDet::factory()->count(100)->create();

        $members = MemberMain::factory()->count(100)->create();

        foreach ($members as $member) {
            MemberAccounting::factory()->for($member)->create();
            MemberApi::factory()->for($member)->create();
            MemberDet::factory()->for($member)->create();
        }
    }
}

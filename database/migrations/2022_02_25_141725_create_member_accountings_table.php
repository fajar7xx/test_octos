<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberAccountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('member_accountings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_main_id')->constrained('member_mains');
            $table->double('sum_depo', 12, 2);
            $table->unsignedInteger('count_depo');
            $table->double('sum_wd', 12, 2);
            $table->unsignedInteger('count_wd');
            $table->double('sum_referral', 12, 2);
            $table->unsignedInteger('count_referral');
            $table->double('sum_rebate', 12, 2);
            $table->unsignedInteger('count_rebate');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('member_accountings');
        Schema::enableForeignKeyConstraints();
    }
}

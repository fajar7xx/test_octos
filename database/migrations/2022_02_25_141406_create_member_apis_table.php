<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('member_apis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_main_id')->constrained('member_mains');
            $table->unsignedBigInteger('provider_id');
            $table->string('user_api', 50);
            $table->double('balance', 12, 2);
            $table->tinyInteger('is_active');
            $table->text('token');
            $table->double('turnover_bonus', 12, 2);
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
        Schema::dropIfExists('member_apis');
        Schema::enableForeignKeyConstraints();
    }
}

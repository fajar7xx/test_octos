<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('member_dets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_main_id')->constrained('member_mains');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('bank_acc');
            $table->string('bank_num');
            $table->string('bank_name');
            $table->text('detail')->nullable();
            $table->string('ip_i')->nullable();
            $table->string('up_l')->nullable();
            $table->dateTime('login_l');
            $table->text('system_msg')->nullable();
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
        Schema::dropIfExists('member_dets');
        Schema::enableForeignKeyConstraints();
    }
}

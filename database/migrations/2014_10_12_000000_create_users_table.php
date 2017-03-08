<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('appartment_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('img')->nullable();
            $table->string('gps_lattitude')->nullable();
            $table->string('gps_longhitude')->nullable();
            $table->integer('is_confirmed')->default(0);
            $table->integer('is_conpleted')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

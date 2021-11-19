<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name_user',30);
            $table->string('surname',30);
            $table->string('thirdname',30);
            $table->string('passport_number',30);
            $table->string('passport_serial',30);
            $table->string('snils',30);
            $table->string('phone_number',11);
            $table->string('login',30);
            $table->string('password',30);
            $table->date('birth_day');
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
        Schema::dropIfExists('user_clubs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonements', function (Blueprint $table) {
            $table->id();
            $table->string('name_abonement', 30);
            $table->string('cost_abonement', 30);
            $table->date('date_start');
            $table->date('date_finish');

             $table->foreignId('bonus_programms_id') -> constrained();

//            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonements');
    }
}

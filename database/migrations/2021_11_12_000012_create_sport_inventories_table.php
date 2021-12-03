<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_inventories', function (Blueprint $table) {
            $table->id();

            $table->foreignId('types_of_inventories_id') -> constrained();
            $table->foreignId('halls_id') -> constrained();
            $table->foreignId('fabricators_id') -> constrained();

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
        Schema::dropIfExists('sport_inventories');
    }
}

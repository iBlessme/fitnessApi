<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sport_inventories_id') -> constrained();
            $table->foreignId('workers_id') -> constrained();
            $table->foreignId('clients_id') -> constrained();

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
        Schema::dropIfExists('reseptions');
    }
}

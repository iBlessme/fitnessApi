<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('salary', 30);

            $table->foreignId('position_works_id') -> constrained();
            $table->foreignId('user_clubs_id') -> constrained();

            $table->timestamps();
        });
//        Schema::table('workers', function ($table){
//           $table->string('api_token', 80)->after('password')
//               ->unique()
//               ->nullable()
//               ->default(null);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}

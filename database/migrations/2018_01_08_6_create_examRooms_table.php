<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examRooms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('started_at');
            $table->timestamp('elapsed_time')->nullable();
            $table->tinyInteger('is_finished');
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
        Schema::table('examRooms', function (Blueprint $table) {
            //
        });
    }
}

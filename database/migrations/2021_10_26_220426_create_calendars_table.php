<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->integer('service_id', true);
            $table->tinyInteger('monday');
            $table->tinyInteger('tuesday');
            $table->tinyInteger('wednesday');
            $table->tinyInteger('thursday');
            $table->tinyInteger('friday');
            $table->tinyInteger('saturday');
            $table->tinyInteger('sunday');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('calendar');
    }
}

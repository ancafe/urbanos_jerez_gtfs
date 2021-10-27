<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('agency_name', 255);
            $table->string('agency_url', 255);
            $table->string('agency_timezone', 50);
            $table->string('agency_phone', 50);
            $table->string('feed_controller', 255)->nullable();
            $table->string('feed_url', 255)->nullable()->comment('Internal use for Laravel');
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
        Schema::dropIfExists('agency');
    }
}

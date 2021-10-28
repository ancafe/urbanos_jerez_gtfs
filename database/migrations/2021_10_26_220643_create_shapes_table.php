<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shapes', function (Blueprint $table) {
            $table->string('shape_id',12);
            $table->decimal('shape_pt_lat',10,8);
            $table->decimal('shape_pt_lon',11,8);
            $table->integer('shape_pt_sequence');
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
        Schema::dropIfExists('shapes');
    }
}

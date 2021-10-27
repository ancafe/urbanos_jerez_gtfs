<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_attributes', function (Blueprint $table) {
            $table->integer('fare_id', true);
            $table->decimal('price',9,6);
            $table->string('currency_type');
            $table->integer('payment_method');
            $table->integer('transfers');
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
        Schema::dropIfExists('fare_attributes');
    }
}

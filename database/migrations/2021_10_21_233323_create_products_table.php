<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->longText('description');
            $table->string('category');
            $table->string('food_restriction');
            $table->string('number_people_served');
            $table->string('price');
            $table->longText('image')->nullable();

            $table->unsignedBigInteger('establishment_id')->nullable();
            $table->foreign('establishment_id')->references('id')->on('establishments');

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
        Schema::dropIfExists('products');
    }
}

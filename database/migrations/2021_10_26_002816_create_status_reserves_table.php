<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_reserves', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('status_reserves')->insert(['id' => 1,  'description' => 'Pendente']);
        DB::table('status_reserves')->insert(['id' => 2,  'description' => 'Aprovado']);
        DB::table('status_reserves')->insert(['id' => 3,  'description' => 'Desaprovado']);
        DB::table('status_reserves')->insert(['id' => 4,  'description' => 'Finalizada']);
        DB::table('status_reserves')->insert(['id' => 5,  'description' => 'Cancelada']);
        DB::table('status_reserves')->insert(['id' => 6,  'description' => 'Em andamento']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_reserves');
    }
}

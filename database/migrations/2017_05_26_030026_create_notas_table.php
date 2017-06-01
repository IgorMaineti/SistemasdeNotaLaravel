<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */ public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_usuario');
            $table->text('materia');
            $table->smallInteger('d1_p1');
            $table->smallInteger('d1_p2');
            $table->smallInteger('atv_d1');
            $table->smallInteger('d1_p3');
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
        Schema::dropIfExists('notas');
    }
}

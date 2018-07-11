<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      try{
      \DB::beginTransaction();
      Schema::create('productos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', '200');
          $table->string('descripcion', '500');
          $table->integer('categoria_id')->unsigned();
          $table->integer('precio');
          $table->timestamps();
          $table->foreign('categoria_id')->references('id')->on('categorias');
      });


      \DB::commit();
    }catch(\PDOException $e){
      \DB::rollback();
      echo "error durante la migración:" . $e->getMessage();
    }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('productos');
    }
}

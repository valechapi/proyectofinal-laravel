<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
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
      Schema::create('categorias', function (Blueprint $table) {
          $table->increments('id');
          $table->string('descripcion', '500');
          $table->timestamps();
      });

      \DB::table('categorias')->insert([
        [ 'descripcion' => 'silla'],
        [ 'descripcion' => 'futon'],
        [ 'descripcion' => 'sillon'],
        [ 'descripcion' => 'banquito'],
        [ 'descripcion' => 'sofa'],
        [ 'descripcion' => 'sofacama'],
        [ 'descripcion' => 'mesa'],
        [ 'descripcion' => 'mesa ratona'],
        [ 'descripcion' => 'mesa de luz'],
      ]);

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
      Schema::drop('categorias');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'Categorias';

  public function producto(){
    return $this->hasMany(Producto::class);
  }
}

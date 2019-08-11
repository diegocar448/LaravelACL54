<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'titulo'
    ];

    public function carros()
    {
      return $this->belongsToMany('App\Carro');
    }
}

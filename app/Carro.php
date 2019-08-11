<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'ano', 'valor'
    ];

    public function marca()
    {
      return $this->belongsTo('App\Marca');
    }

    public function categorias()
    {
      return $this->belongsToMany('App\Categoria');
    }

    public function usuarios()
    {
      return $this->belongsToMany('App\User');
    }

    public function imagens()
    {
      return $this->hasMany('App\Galeria');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = ['user_id','titulo','descricao','status'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}

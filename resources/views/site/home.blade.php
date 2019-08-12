@extends('layouts.app')

@section('content')

  @component('componentes.slide',['lista'=>$slides])
  @endcomponent

<div class="container">
  @component('componentes.lista_cartao',['lista'=>$carros,'tamanho'=>'4'])
  @endcomponent

</div>
@endsection

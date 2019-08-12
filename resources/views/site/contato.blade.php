@extends('layouts.app')

@section('content')

<div class="container">
    <div id="destaques" class="row section scrollspy">
      <div class="col s12 m6">
        @component('componentes.slide',['lista'=>$galeria])
        @endcomponent
      </div>

      <div class="col s12 m6">

        <h3 class="center">Contato:</h3>
        <form>
          <div class="input-field col s12">
            <input type="text" class="validate">
            <label>Nome</label>
          </div>
          <div class="input-field col s12">
            <input type="email" class="validate">
            <label>E-mail</label>
          </div>
          <div class="input-field col s12">
            <textarea class="materialize-textarea"></textarea>
            <label>Mensagem</label>
          </div>
          <div class="input-field col s12">
            <button  class="waves-effect waves-light btn">Enviar</button>
          </div>
        </form>
      </div>

    </div>
</div>
@endsection

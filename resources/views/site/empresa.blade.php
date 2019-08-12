@extends('layouts.app')

@section('content')

<div class="container">
    <div id="destaques" class="row section scrollspy">
      <div class="col s12 m6">
        @component('componentes.slide',['lista'=>$galeria])
        @endcomponent
      </div>

      <div class="col s12 m6">
        <div class="card">
          <div class="card-stacked">
            <div class="card-content">
              <h2 class="header">Empresa</h2>
              <blockquote>
                Descrição sobre a empresa
              </blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
</div>
@endsection

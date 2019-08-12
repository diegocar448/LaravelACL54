@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h2 class="center">Cadastro do Sistema</h2>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}

          <div class="input-field col s12">
            <input type="text" name="name" value="{{ old('name') }}" class="validate" autofocus>
            <label>Nome</label>
            @if ($errors->has('name'))
                <span>
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="input-field col s12">
            <input type="text" name="email" value="{{ old('email') }}" class="validate">
            <label>E-mail</label>
            @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="input-field col s12">
            <input type="password"  name="password" value="{{ old('password') }}" class="validate">
            <label>Senha</label>
            @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="input-field col s12">
            <input type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}" class="validate">
            <label>Confirme a senha</label>
            @if ($errors->has('password_confirmation'))
                <span>
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>
          <div class="col s12">
            <br/>
            <button class="btn green">Cadastrar</button>
          </div>
      </form>
    </div>
</div>

@endsection

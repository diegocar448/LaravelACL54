@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
      <h2 class="center">Recuperar Senha</h2>
      <p class="center">Você receberá um link por e-mail</p>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
          {{ csrf_field() }}

          <div class="input-field col s12">
            <input type="text" name="email" value="{{ old('email') }}" class="validate" autofocus>
            <label>E-mail</label>
            @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="col s12">
            <br/>
            <button class="btn green">Recuperar</button>
          </div>
      </form>

    </div>
</div>
@endsection

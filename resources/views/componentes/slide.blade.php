<div class="slider ">
  <ul class="slides">
    @foreach($lista as $key => $value)
      <li>
        <img src="{{$value->imagem}}"> <!-- random image -->
        <div class="caption center-align">
          @if(isset($value->titulo))
            <h3>{{$value->titulo}}</h3>
          @endif
          @if(isset($value->descricao))
            <h5 class="light grey-text text-lighten-3">{{$value->descricao}}</h5>
          @endif

        </div>
      </li>
    @endforeach
  </ul>
</div>

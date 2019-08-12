<div class="row">
  @foreach($lista as $key => $value)
    <div class="col s12 m{{$tamanho}}">
      @component('componentes.cartao',[
        'titulo'=>$value->titulo,
        'descricao'=>$value->descricao,
        'imagem'=>$value->imagem,
        'valor'=>$value->valor,
        'url'=>$value->url]
        )

      @endcomponent
    </div>
  @endforeach

</div>

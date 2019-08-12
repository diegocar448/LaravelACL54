<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/addregistros', function () {

  $zero  = App\Categoria::create(['titulo'=>'Zero KM']);
  $semi  = App\Categoria::create(['titulo'=>'Seminovos']);
  $usado = App\Categoria::create(['titulo'=>'Usados']);

  $Honda = App\Marca::create(['titulo'=>'Honda','descricao'=>'Carros Honda']);
  $Chevrolet = App\Marca::create(['titulo'=>'Chevrolet','descricao'=>'Carros Chevrolet']);

  $Camaro = $Chevrolet->carros()->create(['titulo'=>'Camaro','descricao'=>'Automático e completo','ano'=>2017,'valor'=>150000.90]);
  $Civic = App\Carro::create(['marca_id'=>1,'titulo'=>'Civic','descricao'=>'Automático e completo','ano'=>2017,'valor'=>80000.00]);

  $Camaro->categorias()->attach($usado);
  $Camaro->categorias()->attach($semi);

  $categorias = [
      new App\Categoria(['titulo'=>'Nacional']),
      new App\Categoria(['titulo'=>'Destaque']),
      new App\Categoria(['titulo'=>'Luxo'])
  ];

  $Civic->categorias()->saveMany($categorias);
  $Civic->categorias()->attach($semi);

  $usuario = App\User::find(1);

  $usuario->carros()->attach($Civic);
  $usuario->carros()->attach($Camaro);

  return "Registros criados";

});

Route::get('/testesregistros', function () {

  $carro = App\Carro::find(1);
  //dd($carro->marca);

  $marca = App\Marca::find(1);

  //dd($marca->carros);

  //dd($carro->categorias);

  $categoria = App\Categoria::find(2);

  //dd($categoria->carros);

  //dd($carro->usuarios);

  $usuario = App\User::find(1);
  //dd($usuario->carros);

  dd($carro->imagens);


});

Route::get('/addgalerias', function () {

  for($i=1; $i<4;$i++){
    App\Galeria::create([
      'titulo'=> '',
      'carro_id'=> 1,
      'descricao'=> '',
      'url'=> 'http://o.aolcdn.com/commerce/autodata/images/USC60CHC021A021001.jpg',
      'ordem'=> $i
    ]);
    App\Galeria::create([
      'titulo'=> '',
      'carro_id'=> 2,
      'descricao'=> '',
      'url'=> 'http://o.aolcdn.com/commerce/autodata/images/USC60CHC021A021001.jpg',
      'ordem'=> $i
    ]);
  }

  return "Registros criados";


});



Route::get('/', function () {
    $slides = [
      (object)[
        'titulo'=>'Título ',
        'descricao'=>'Descrição ',
        'url'=>'#link',
        'imagem'=>'https://moriohcdn.b-cdn.net/19b5f9d0b2.png'

      ]
    ];

    $carros = [
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Titulo qualquer',
        'descricao' => 'Descrição qualquer',
        'imagem' => 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg',
        'valor' => 'R$0,00',
        'url' => url('detalhe')
      ]
  ];

    return view('site.home',compact('slides','carros'));
});

Auth::routes();

Route::get('/contato',function(){
  $galeria = [
    (object)[
      'imagem'=>'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg'
    ]
  ];
  return view('site.contato',compact('galeria'));
});
Route::get('/detalhe',function(){
  $galeria = [
    (object)[
      'imagem'=>'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg'
    ]
  ];
  return view('site.detalhe',compact('galeria'));
});
Route::get('/empresa',function(){
  $galeria = [
    (object)[
      'imagem'=>'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg'
    ]
  ];
  return view('site.empresa',compact('galeria'));
});

Route::get('/home', 'HomeController@index');

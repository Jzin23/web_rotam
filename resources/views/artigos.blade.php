<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .noticias {
      display: flex;
      .card{
      position: relative;
      margin: 2vh;
    }
    }
    
  </style>
</head>
@section('titulo',' ARTIGOS')
@include('layout/menu')

<body>
  <h1>artigos</h1>


  <div class="noticias">
    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

  </div>


  <div class="noticias">
    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="{{asset('image/rotam.jpg')}}">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>


  </div>

  @include('layout/rodape')
</body>

</html>
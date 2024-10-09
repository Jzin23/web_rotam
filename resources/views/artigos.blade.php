<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    body{
            background-color: #000;
        }
        h1{
            color: #fff000;
        }
    .noticias {
      display: flex;

      .card {
        position: relative;
        margin: 4rem;
      }
    }

    h1 {
      margin: 2rem;
    }
  </style>
</head>
@section('titulo', ' ARTIGOS')
@include('layout/menu')

<body>
  <h1>Artigos</h1>


  <div class="noticias">

    <!--<a href="{{ Route('site.portfolio') }}">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('image/rotam.jpg')}}">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalNoticia">Acessar</button>
        </div>
      </div>
    </a>-->

      <div class="card" style="width: 18rem;">
        <img src="{{asset('image/rotam.jpg')}}">
        <div class="card-body">
          <p class="card-text">O titulo da noticia</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalNoticia">Acessar</button>
        </div>
      </div>
  </div>


    
    <div class="modal fade bd-example-modal-lg" id="ModalNoticia" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            @include('noticia')
            </div>
        </div>
    </div>



  @include('layout/rodape')
</body>

</html>
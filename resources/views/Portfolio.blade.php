<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        .card{
            margin: 5rem;
        }
        .card-deck {
            display: flex;

            .card {
                margin: 5rem;
            }
        }
    </style>
</head>
@section('titulo', ' PORTFOLIO')
@include('layout/menu')

<body><br>
    <h1>Os portfolios de nossos atletas</h1>

    <div class="portfolio">

        <div class="card" style="width: 18rem;">
        <img src="{{asset('image/rotam.jpg')}}">
            <div class="card-body">
                <h5 class="card-title">Nome do Atleta</h5>
                <p class="card-text">Breve descrição do atleta</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                    <i class="bi bi-trash"></i> Acessar
                </button>
            </div>
        </div>


    </div>

    <div class="modal fade bd-example-modal-lg" id="ModalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <h1>Nome Atleta</h1>
      <img src="{{asset('image/rotam.jpg')}}">
      <br>
      <h6>Breve descrição do atleta</h6>
      <br>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laborum iusto eum tempore consequuntur delectus eius mollitia dolorum ipsam recusandae dolores suscipit veniam incidunt, porro sit ad consectetur voluptatum quisquam?</p>
      <hr>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi reiciendis ullam eveniet nobis aperiam autem. At mollitia soluta illum dolorem quisquam culpa laborum iste minus doloribus, dicta corporis saepe deleniti!</p>
    </div>
  </div>
</div>


@include('layout/rodape')
</body>

</html>
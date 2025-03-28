<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: #000;
        }

        h1 {
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


    <div class="container">
    <div class="row">
        @foreach ($artigos as $artigo)
        <div class="col-md-4 mb-4"> <!-- Divide em 3 colunas por linha -->
            <div class="card" style="width: 100%;">
                <img src="{{ asset('storage/artigos/fotos/' . $artigo->CAMINHO_FOTO) }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">{{ $artigo->TITULO_ART }}</p>
                    <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#ModalNoticia{{ $artigo->ID_ARTIGO }}">Acessar</button>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="ModalNoticia{{ $artigo->ID_ARTIGO }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    @include('noticia', ['artigo' => $artigo])
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    @include('layout/rodape')
</body>

</html>
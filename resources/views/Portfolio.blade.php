<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Membros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #000;
        }

        h1 {
            color: #fff000;
        }

        .card {
            margin: 5rem;
        }

        .card-deck {
            display: flex;

            .card {
                margin: 5rem;
            }
        }

        .modal-content p,
        h6,
        h1 {
            padding: 2rem;
        }

        .text {
            color: black;
        }
    </style>
</head>
@section('titulo', ' PORTFOLIO')
@include('layout/menu')

<body>

    <div class="conteudo">
        <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-warning">Portfólio dos Atletas</h1>
        </div>

        <div class="row">
            <!-- Iterando sobre os portfólios -->
            @foreach ($portfolios as $portfolio)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 100%; margin: auto;">
                        <!-- Exibe a imagem se houver -->
                        @if ($portfolio->caminho_foto_exibicao)
                            <img src="{{ asset('storage/portfolios/fotos/' . $portfolio->CAMINHO_FOTO_EXIBICAO) }}"
                                class="card-img-top" alt="Imagem do Atleta">
                        @else
                            <img src="https://via.placeholder.com/300x200" class="card-img-top"
                                alt="Imagem não encontrada">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $portfolio->NOME_ATLETA }}</h5>
                            <p class="card-text">{{ $portfolio->DESCRICAO_BREVE }}</p>

                            <!-- Acessar portfolio no modal -->
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#Modal{{ $portfolio->id }}">Acessar</button>
                        </div>



                    </div>
                </div>

                <!-- Modal para Exibir Detalhes do Atleta -->
                <div class="modal fade" id="Modal{{ $portfolio->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Exibe o currículo -->
                            <img src="{{ asset('storage/portfolios/curriculos/' . $portfolio->CAMINHO_CURRICULO_ATLETA) }}"
                                class="img-fluid" alt="Imagem do Atleta">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    @include('layout/rodape')
</body>

</html>

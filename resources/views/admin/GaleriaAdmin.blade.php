<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <style>
        body {
            display: flex;
            background-color: #1a1a1a;

            .form-floating {
                margin: 2rem;
            }
        }

        #cabecalho {
            padding: 1rem;
            width: 70vw;
        }

        .conteudo {
            width: 75%;
            right: 1rem;
            position: absolute;
            width: 75%;
        }

        .imagens {
            position: relative;
            width: 55vw;
            height: 20vh;
            border: 4px solid #ccc;
        }

        .imagens img {
            max-width: 100%;
            margin: 1rem;
            max-height: 100%;
        }

        .imagem {
            border: 5px solid #000;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: 200px;
            /* Ajuste o tamanho conforme necessário */
            object-fit: cover;
        }
    </style>
</head>

<body>

    @include('layout/menuAdmin')
    <div class="conteudo">
        <div class="content p-4 w-100">
            <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">

                <h1 class="text-warning">Galeria</h1>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Fotos +</button>
            </div>
        </div>





        <div class="row">
            @foreach ($galerias as $galeria)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Carrossel de Imagens -->
                    <div id="carousel{{ $galeria->ID_CARROCEL }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($galeria->imagens as $index => $imagem)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $imagem->CAMINHO_FOTO) }}" class="d-block w-100" alt="Imagem">
                            </div>
                            @endforeach
                        </div>

                        <!-- Controles do Carrossel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $galeria->ID_CARROCEL}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $galeria->ID_CARROCEL }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $galeria->titulo }}</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditandoCarrocel">
                            <i class="bi bi-pencil"></i> Editar
                        </button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>

    <!-- Modal Adicionar -->
    <div class="modal fade" id="AdicionarModal" tabindex="-1" aria-labelledby="AdicionarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-4">
                <h2 class="text-center">Adicionar Novo Carrossel</h2>

                <form action="{{ route('conf.galeria.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tituloCarrossel" name="titulo"
                            placeholder="Título">
                        <label for="tituloCarrossel">Título do Carrossel</label>
                    </div>

                    <div class="mb-3">
                        <label for="imagensCarrossel" class="form-label">Selecionar Imagens</label>
                        <input class="form-control" type="file" id="imagensCarrossel" name="imagens[]" multiple
                            required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Editando Carrocel-->
    <div class="modal fade bd-example-modal-lg" id="EditandoCarrocel" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h1>Editando carrocel</h1>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <hr>
                    <label for="floatingTextarea">Titulo do artigo</label>
                </div>

                <div class="imagens">

                    <div class="imagem">
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <img src="{{ asset('image/rotam.jpg') }}">
                    </div>

                    <div class="imagem">
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <img src="{{ asset('image/rotam.jpg') }}">
                    </div>

                </div>
                <br>
                <br>
                <br>

                <div>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" multiple="multiple">
                    <input type="submit" value="Anexar" class="btn btn-primary">

                </div>
                <br>
                <br>
                <hr>

                <button class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#EditandoCarrocel">Salvar</button>
            </div>
        </div>
    </div>

</body>

</html>
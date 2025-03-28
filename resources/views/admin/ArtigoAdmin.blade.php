<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Membros</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="{{ URL::to('tinymce/tinymce.min.js') }}"></script>


    <script>
        tinymce.init({
            selector: '#Editor',
        });
    </script>

    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            background-color: #1a1a1a;

            .form-floating {
                margin: 2rem;
            }
        }

        .modal-content h1 {
            margin: 1rem;
        }

        .conquistasModel {
            overflow: auto;
            height: auto;

        }

        .imagem_card img {
            width: 100%;
            height: 40vh;
            object-fit: contain;
            /*não  deixa torcer a imagem dentro da div*/
        }

        .conteudo {
            width: 75%;
            right: 1rem;
            position: absolute;
        }

        #cabecalho {
            padding: 1rem;
            width: 70vw;
        }
    </style>
</head>

<body>


    <div class="menu">@include('layout/menuAdmin')</div>

    <div class="conteudo">

        <!-- Main Content -->



        <div class="content p-4 w-100">
            <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-warning">Artigos</h1>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Artigos
                    +</button>
            </div>

            <div class="row">
                <!-- Cards -->
                @foreach ($artigos as $artigo)
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const editButtons = document.querySelectorAll('.edit-button');
                        const deleteButtons = document.querySelectorAll('.delete-button');
                        const editForm = document.querySelector('#editarArtigoForm');
                        const deleteForm = document.querySelector('#excluirArtigoForm');

                        // Configuração para o modal de edição
                        editButtons.forEach(button => {
                            button.addEventListener('click', function() {
                                const id = button.getAttribute('data-id');
                                const titulo = button.getAttribute('data-titulo');
                                const subtitulo = button.getAttribute('data-subtitulo');

                                // Define a URL de atualização
                                editForm.action = `/conf/artigos/update/${id}`;
                                document.querySelector('[name="titulo"]').value = titulo;
                                tinymce.get('Editor').setContent(subtitulo); // Seta conteúdo do TinyMCE
                            });
                        });

                        // Configuração para o modal de exclusão
                        deleteButtons.forEach(button => {
                            button.addEventListener('click', function() {
                                const id = button.getAttribute('data-id');
                                deleteForm.action = `/conf/artigos/destroy/${id}`; // Define a URL de exclusão
                            });
                        });
                    });
                </script>

                 <div class="col-md-4 mb-4">
        <div class="card h-100 d-flex flex-column">
            <img src="{{ asset('storage/artigos/fotos/'. $artigo->CAMINHO_FOTO) }}" class="card-img-top"
                style="height: 200px; object-fit: cover;" alt="Imagem do Artigo">

            <div class="card-body d-flex flex-column justify-content-between text-center">
                <h5 class="card-title">{{ $artigo->TITULO_ART }}</h5>
                <p class="card-text">{{ $artigo->SUBTITULO_ART }}</p>
                
                <div class="mt-auto"> <!-- Mantém os botões na parte inferior -->
                    <a href="{{ $artigo->LINK_ART }}" target="_blank" class="btn btn-primary">Leia Mais</a>
                    <button type="button" class="btn btn-warning edit-button" data-id="{{ $artigo->id }}"
                        data-titulo="{{ $artigo->titulo }}" data-bs-toggle="modal" data-bs-target="#EditarModal">
                        <i class="bi bi-pencil"></i> Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-id="{{ $artigo->id }}"
                        data-bs-toggle="modal" data-bs-target="#ModalExcluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>
                @endforeach
            </div>
        </div>

        <!-- Editar artigo-->
        <div class="modal fade bd-example-modal-lg" id="EditarModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <form action="" method="POST" id="editarArtigoForm">
                        @csrf
                        @method('PUT')
                        <h1>Editando artigo</h1>
                        <div class="form-floating">
                            <textarea name="titulo" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <hr>
                            <label for="floatingTextarea">Titulo do artigo</label>
                            <textarea name="subtitulo" id="Editor"></textarea>
                        </div>

                        <hr>

                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#EditarModal">Salvar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Adicionar tar artigo-->
        <div class="modal fade bd-example-modal-lg" id="AdicionarModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <form action="{{ route('conf.artigos.store') }}" method="POST" id="artigo"
                        enctype="multipart/form-data">
                        @csrf
                        <h1 style="text-align: center">Adicionando artigo</h1>
                        <div class="form-floating">
                            <hr>
                            <div>
                                <textarea name="titulo_art" class="form-control" placeholder="Titulo do artigo" id="floatingTitulo"></textarea>
                            </div>
                            <hr>
                            <div>
                                <textarea name="subtitulo_art" class="form-control" placeholder="Sub-titulo do artigo" id="floatingSub"></textarea>
                            </div>
                            <hr>
                            <div>
                                <label class="form-label">Selecione a imagem do artigo</label>
                                <input class="form-control" type="file" name="caminho_foto" required>
                            </div>
                            <hr>
                            <div>
                                <textarea placeholder="Conteúdo do artigo" name="conteudo_art" id="Editor"></textarea>
                            </div>
                            <hr>
                            <div>
                                <textarea name="link_art" class="form-control" placeholder="link do artigo oficial" id="floatingSub"></textarea>
                            </div>
                        </div>

                        <hr>

                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#AdicionarModal">Salvar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal excluir-->
        <div class="modal fade" id="ModalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Exclusão de Portfólio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ATENÇÃO!!! <br>Você deseja excluir esse Portfólio?
                    </div>
                    <div class="modal-footer">
                        <form action="" method="POST" id="excluirArtigoForm">
                            @csrf
                            @method('POST')
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Sim, desejo excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
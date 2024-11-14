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
            display: flex;
            background-color: #1a1a1a;
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

        .form-floating {
            margin: 2rem;
        }

        .conquistasModel {
            overflow: auto;
            height: auto;
        }
        .imagem img {
            width: 100%;
            height: 40vh;
            object-fit: contain;
            /*não  deixa torcer a imagem dentro da div*/
        }
    </style>
</head>

<body>

    @include('layout.menuAdmin')

    <div class="conteudo">
        <!-- Main Content -->
        <div class="content p-4 w-100">
            <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-warning">Portfólio</h1>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Portfolio
                    +</button>
            </div>

            <div class="row">
                <!-- Iterando sobre os portfólios -->
                @foreach ($portfolios as $portfolio)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <!-- Verifica se há uma imagem associada ao portfólio -->
                            @if ($portfolio->imagem)
                               <div class="imagem">
                               <img src="{{ asset('image/' . $portfolio->imagem->foto) }}" class="card-img-top"
                               alt="Imagem do Atleta">
                               </div>
                            @else
                                <img src="https://via.placeholder.com/300x200" class="card-img-top"
                                    alt="Imagem não encontrada">
                            @endif

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $portfolio->nome_atleta }}</h5>
                                <p class="card-text">{{ $portfolio->descricao_breve }}</p>

                                <!-- Botões de ação -->
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#ModalConquista">Conquista +</button>

                                <!-- Botão editar que chama o script -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-id="{{ $portfolio->id_portfolio }}"
                                    data-nome="{{ $portfolio->nome_atleta }}"
                                    data-descricao="{{ $portfolio->descricao_breve }}"
                                    data-foto="{{ asset('image/' . $portfolio->imagem->foto) }}">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>

                                <!-- Botão excluir que chama o script -->
                                <button class="btn
                                    btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>

                                <!-- Script que atualiza o parametro do formulario de edição ao clicar no botão editar -->
                                <script>
                                    // Quando o botão de "Editar" for clicado
                                    document.querySelectorAll('[data-bs-toggle="modal"][data-bs-target="#exampleModal"]').forEach(button => {
                                        button.addEventListener('click', function() {
                                            // Recuperando os dados do botão
                                            const id = this.getAttribute('data-id');
                                            const nomeAtleta = this.getAttribute('data-nome');
                                            const descricao = this.getAttribute('data-descricao');
                                            const foto = this.getAttribute('data-foto');

                                            // Preenchendo os campos do modal com os dados recuperados
                                            document.getElementById('nome_atleta').value = nomeAtleta;
                                            document.getElementById('floatingTextarea').value = descricao;

                                            // Exibindo a imagem caso exista
                                            const imgPreview = document.getElementById('imgPreview');
                                            if (foto) {
                                                imgPreview.style.display = 'block';
                                                imgPreview.src = foto;
                                            } else {
                                                imgPreview.style.display = 'none';
                                            }

                                            // Alterando a ação do formulário para enviar para o URL correto
                                            const form = document.getElementById('editForm');
                                            form.action = `/confPortfolio/update/{id_portfolio}`; // Atualiza o action com o ID correto
                                        });
                                    });
                                </script>

                                <!-- Modal Editar -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editando Portfólio
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- O formulário já está vazio e será preenchido com os dados via JavaScript -->
                                                <form id="editForm"
                                                    action="{{ route('conf.portfolios.update', $portfolio->id_portfolio) }}"
                                                    method="POST" enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <label>Nome do atleta</label>
                                                    <input id="nome_atleta" type="text" name="nome_atleta"
                                                        class="form-control" value="{{ $portfolio->nome_atleta }}">
                                                    <hr>

                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Selecione a foto do
                                                            atleta</label>
                                                        <input class="form-control" type="file" name="foto"
                                                            id="formFile">
                                                        <img id="imgPreview" src="" alt="Imagem do atleta"
                                                            style="display:none; margin-top:10px; width:100px;">
                                                    </div>
                                                    <hr>

                                                    <div class="form-floating">
                                                        <textarea class="form-control" id="floatingTextarea" name="descricao_breve"></textarea>
                                                        <label for="floatingTextarea">Apresente aqui uma breve descrição
                                                            do atleta</label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" form="editForm"
                                                    class="btn btn-success mt-3">Salvar alterações</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modais para adicionar, editar e excluir portfólio (já existentes no seu código) -->
            <!-- Modal Adicionar -->
            <div class="modal fade" id="AdicionarModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionando Portfólio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('conf.portfolios.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <label> Nome do atleta</label>
                                <input type="text" name="nome_atleta" class="form-control" required>
                                <hr>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Selecione a foto do atleta</label>
                                    <input class="form-control" type="file" name="foto" id="formFile"
                                        required>
                                </div>
                                <hr>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descricao_breve"
                                        required></textarea>
                                    <label for="floatingTextarea">Apresente aqui uma breve descrição do atleta</label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3">Salvar</button>
                            </form>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal Excluir -->
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
                            ATENÇÃO!!! <br> Você deseja excluir esse Portfólio?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger">Sim, desejo excluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

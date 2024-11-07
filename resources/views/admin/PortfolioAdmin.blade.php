<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio de Membros</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
    
  </style>
</head>

<body>

  @include('layout.menuAdmin')

  <div class="conteudo">
    <!-- Main Content -->
    <div class="content p-4 w-100">
      <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-warning">Portfólio</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Portfolio +</button>
      </div>

      <div class="row">
        <!-- Iterando sobre os portfólios -->
        @foreach($portfolios as $portfolio)
          <div class="col-md-4 mb-4">
            <div class="card">
              <!-- Verifica se há uma imagem associada ao portfólio -->
              @if($portfolio->imagem)
                <img src="{{ asset('image/'.$portfolio->imagem->foto) }}" class="card-img-top" alt="Imagem do Atleta">
              @else
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem não encontrada">
              @endif

              <div class="card-body text-center">
                <h5 class="card-title">{{ $portfolio->nome_atleta }}</h5>
                <p class="card-text">{{ $portfolio->descricao_breve }}</p>

                <!-- Botões de ação -->
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalConquista">Conquista +</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

      <!-- Modais para adicionar, editar e excluir portfólio (já existentes no seu código) -->
      <!-- Modal Adicionar -->
      <div class="modal fade" id="AdicionarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionando Portfólio</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('conf.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label> Nome do atleta</label>
                <input type="text" name="nome_do_atleta" class="form-control" required>
                <hr>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Selecione a foto do atleta</label>
                  <input class="form-control"  type="file" name="foto" id="formFile" required>
                </div>
                <hr>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descricao_breve" required></textarea>
                  <label for="floatingTextarea">Apresente aqui uma breve descrição do atleta</label>
                </div>
                <button type="submit"  class="btn btn-success mt-3">Salvar</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Editar -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editando Portfólio</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Formulário de edição aqui -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Excluir -->
      <div class="modal fade" id="ModalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Exclusão de Portfólio</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ATENÇÃO!!! <br> Você deseja excluir esse Portfólio?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button class="btn btn-danger">Sim, desejo excluir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

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
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <script src="{{ URL::to('tinymce/tinymce.min.js')}}"></script>


  <script>
    tinymce.init({
      selector: '#Editor'
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
    .conteudo {

      right: 1rem;
      position: absolute;
    }

    #cabecalho {
      padding: 1rem;
      width: 75vw;
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
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Artigos +</button>
      </div>


      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{asset('image/rotam.jpg')}}">
            <div class="card-body text-center">
              <h5 class="card-title">Titulo do artigo 1</h5>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#AdicionarEditarModal">
                <i class="bi bi-pencil"></i> editar</button>
              <!-- Button trigger modal -->
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                <i class="bi bi-trash"></i> Excluir
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Adicionar portfólio-->
    <div class="modal fade bd-example-modal-lg" id="AdicionarEditarModal" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <h1>Adicionando/Editando artigo</h1>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <hr>
            <label for="floatingTextarea">Titulo do artigo</label>
            <textarea name="campo_edicao" id="Editor"></textarea>
          </div>
          <br>
          <br>
          <hr>

          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarEditarModal">Salvar</button>
        </div>
      </div>
    </div>


    <!-- Modal excluir-->
    <div class="modal fade" id="ModalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Exclusão de Portfólio</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ATENÇÃO!!! <BR>Você deseja excluir esse Portfólio ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
              Sim, desejo excluir
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
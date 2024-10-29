<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio de Membros</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      display: flex;
      background-color: #1a1a1a;

      .form-floating {
        margin: 2rem;
      }
    }


    .conquistasModel {
      overflow: auto;
      height: auto;

    }

    #cabecalho {
      padding: 1rem;
      width: 90rem;

    }
    .conteudo {

      right: 1rem;
      position: absolute;
    }
  </style>
</head>

<body>


  @include('layout/menuAdmin')
  <div class="conteudo">
    <!-- Main Content -->
    <div class="content p-4 w-100">
      <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-warning">Portfólio</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Portfolio +</button>
      </div>

      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{asset('image/rotam.jpg')}}">
            <div class="card-body text-center">
              <h5 class="card-title">Membro 1</h5>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalConquista">Conquista +
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-pencil"></i> editar</button>



              <!-- Button trigger modal -->
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                <i class="bi bi-trash"></i> Excluir
              </button>
            </div>
          </div>
        </div>

      </div>


      <!-- Adicionar portfólio-->
      <div class="modal fade" id="AdicionarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionando Portfólio</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <label> Nome do atleta</label>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                <hr>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Selecione a foto do atleta</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <hr>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Apresente aqui uma breve descrição do atleta</label>
                </div>

              </form>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" btn btn-success class="btn btn-primary">Salvar</button>

            </div>
          </div>
        </div>
      </div>

      <!-- Modal editar-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editando Portfólio</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <label> Nome do atleta</label>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                <hr>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Selecione a foto do atleta</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <hr>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Apresente aqui uma breve descrição do atleta</label>
                </div>

              </form>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" btn btn-success class="btn btn-primary">Salvar</button>

            </div>
          </div>
        </div>
      </div>

      <!--adicionar conquista/historia-->
      <div class="modal fade" id="ModalConquista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Conquista/Historia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <label> Nome do atleta</label>
                <input type="text" class="form-control" aria-label="Large" disabled="disabled"
                  aria-describedby="inputGroup-sizing-sm" value="Membro numero 1">

            </div>
            <hr>

            <div class="conquistasModel">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                  rows="3"></textarea>
                <label for="floatingTextarea">Apresente aqui uma breve descrição do atleta</label>
                <button class="btn btn-success">Adicionar Conquista</button>
              </div>

              <hr>

              <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1"
                  disabled="disabled">Texto de uma conquista adicionado</textarea>
                <button class="btn btn-danger">X</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button>
              </div>

              <hr>
              <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1"
                  disabled="disabled">Texto de uma conquista adicionado</textarea>
                <button class="btn btn-danger">X</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button>
              </div>

              <hr>
              <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1"
                  disabled="disabled">Texto de uma conquista adicionado</textarea>
                <button class="btn btn-danger">X</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button>
              </div>

            </div>
            <hr>

            </form>

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
  </div>
</body>

</html>
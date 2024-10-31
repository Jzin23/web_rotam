<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
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
      width: 75vw;
    }

    .conteudo {
      right: 1rem;
      position: absolute;
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
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="{{asset('image/rotam.jpg')}}">
          <div class="card-body text-center">
            <h5 class="card-title">Titulo do carrocel</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#EditandoCarrocel">
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
            <img src="{{asset('image/rotam.jpg')}}">
          </div>

          <div class="imagem">
            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
            <img src="{{asset('image/rotam.jpg')}}">
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

        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditandoCarrocel">Salvar</button>
      </div>
    </div>
  </div>

</body>

</html>
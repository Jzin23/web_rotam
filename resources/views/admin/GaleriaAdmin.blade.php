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
    <div class="content p-4 w-100">
      <div id="cabecalho" class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="text-warning">Galeria</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AdicionarModal">Fotos +</button>
      </div>
    </div>
  </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      display: flex;
    }

    #cabecalho {
      border: 5px solid #000;
      width: 90rem;
      height: 5rem;
      margin: 2rem;

    }


    H1 {
      float: LEFT;
      padding: 0.5rem;

    }
  </style>
</head>

<body>
  @include('layout.menuAdmin')

  <div id="conteudo">
    <div id="cabecalho">
      <h1>Parametros</h1>
    </div>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Endereços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>


</body>

</html>
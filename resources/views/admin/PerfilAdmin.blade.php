<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <style>
    body {
      display: flex;
      background-color: #1a1a1a;
    }

    #cabecalho {
      border: 5px solid #000;
      width: 75vw;
      height: 5rem;
      margin: 2rem;
      
    }


    H1 {
      float: LEFT;
      padding: 0.5rem;

    }

    .conteudo {
      right: 1rem;
      position: absolute;
      border: 10px solid #000;
    }
  </style>
</head>

<body>
  @include('layout.menuAdmin')


  <div id="conteudo">
    <div id="cabecalho">
      <h1 class="text-warning">Perfil</h1>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link active"
          id="Perfil-tab"
          data-bs-toggle="tab"
          data-bs-target="#Perfil-tab-pane"
          type="button"
          role="tab"
          aria-controls="Perfil-tab-pane"
          aria-selected="true">Perfil do usuário</button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="Usuarios-tab"
          data-bs-toggle="tab"
          data-bs-target="#Usuarios-tab-pane"
          type="button"
          role="tab"
          aria-controls="Usuarios-tab-pane"
          aria-selected="false">Usuários</button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link"
          id="contact-tab"
          data-bs-toggle="tab"
          data-bs-target="#contact-tab-pane"
          type="button"
          role="tab"
          aria-controls="contact-tab-pane"
          aria-selected="false">Contatos</button>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="Perfil-tab-pane" role="tabpanel" aria-labelledby="Perfil-tab" tabindex="0">

        <h1>testando funcionalidade de perfil de usuários</h1>

      </div>
      <div class="tab-pane fade" id="Usuarios-tab-pane" role="tabpanel" aria-labelledby="Usuarios-tab" tabindex="0">
        
        <h1>testando funcionalidade de usuários</h1>  

      </div>
      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
      
      <h1>testando funcionalidade de Contatos</h1>

      </div>
    </div>
  </div>


</body>

</html>
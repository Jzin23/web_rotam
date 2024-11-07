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

    .nav-link {
      color: #ffff00;
    }

    .nav-link:hover {
      color: #fff;
    }

    .tab-content {
      display: flex;
      align-items: center;
      justify-content: center;


    }

    .parametroPerfilUsuario {
      position: relative;
      width: 50vw;
      color: #fff;
    }

    .btn {
      margin-top: 5%;
    }

    .form-control-plaintext {
      color: #fff;
      margin-bottom: 5%;
    }

    #Usuarios-tab-pane {

      width: 100%;
    }

    #contact-tab-pane {
      width: 40%;
      color: #fff;

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
        <button class="nav-link active" id="Perfil-tab" data-bs-toggle="tab" data-bs-target="#Perfil-tab-pane"
          type="button" role="tab" aria-controls="Perfil-tab-pane" aria-selected="true">Perfil do usuário</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="Usuarios-tab" data-bs-toggle="tab" data-bs-target="#Usuarios-tab-pane"
          type="button" role="tab" aria-controls="Usuarios-tab-pane" aria-selected="false">Usuários</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
          role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contatos</button>
      </li>

    </ul>

    <div class="tab-content" id="myTabContent">

      <!-- funcionalidade dos Perfil do usuário-->
      <div class="tab-pane fade show active" id="Perfil-tab-pane" role="tabpanel" aria-labelledby="Perfil-tab"
        tabindex="0">
        <div class="parametroPerfilUsuario">
          <form>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Senha: </label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Digite a sua senha"><br>
                <input type="password" class="form-control" id="inputPassword"
                  placeholder="Digite novamente a sua senha">
              </div>

              <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
            </div>
          </form>
        </div>
      </div>

      <!-- funcionalidade de consulta dos usuários-->
      <div class="tab-pane fade" id="Usuarios-tab-pane" role="tabpanel" aria-labelledby="Usuarios-tab" tabindex="0">

        <div class="parametroUsuarios">
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Nome do usuário</th>
                <th scope="col">E-mail de login</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>

      <!-- funcionalidade de contato de redes sociais-->
      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

        <div class="contatos">

          <label for="basic-url">Digite o instagram</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
              aria-describedby="basic-addon1">
          </div>

          <label for="basic-url">Digite o link do Facebook</label>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          </div>


          <label for="basic-url">Digite o número do WhatsApp</label>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" placeholder="(99) 9 9999-9999" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          </div>

          <button type="submit" class="btn btn-primary mb-2">Confirmar</button>


        </div>

      </div>
    </div>





  </div>


</body>

</html>
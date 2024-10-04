<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Membros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
        <style>
        body{
            display: flex;
        }
        </style>
</head>

<body>


    @include('layout/menuAdmin')

    <!-- Main Content -->
    <div class="content p-4 w-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-dark">Portfólio</h1>
            <button class="btn btn-success">Adicionar +</button>
        </div>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="{{asset('image/rotam.jpg')}}">
                    <div class="card-body text-center">
                        <h5 class="card-title">Membro 1</h5>
                        <button class="btn btn-primary me-2"><i class="bi bi-pencil"></i> Editar</button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i>Excluir</button>

                        
                    </div>
                </div>
            </div>

        </div>
        <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
  Abrir modal de demonstração
</button>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
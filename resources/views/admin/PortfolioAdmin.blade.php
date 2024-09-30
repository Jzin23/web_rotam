<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Membros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
                    <img src="membro1.jpg" class="card-img-top" alt="Membro 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Membro 1</h5>
                        <button class="btn btn-primary me-2"><i class="bi bi-pencil"></i> Editar</button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i>Excluir</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="membro2.jpg" class="card-img-top" alt="Membro 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Membro 2</h5>
                        <button class="btn btn-primary me-2"><i class="bi bi-pencil"></i> Editar</button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i> Excluir</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="membro3.jpg" class="card-img-top" alt="Membro 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Membro 3</h5>
                        <button class="btn btn-primary me-2"><i class="bi bi-pencil"></i> Editar</button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i> Excluir</button>
                    </div>
                </div>
            </div>

            <!-- Mais cards aqui conforme necessário -->
        </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
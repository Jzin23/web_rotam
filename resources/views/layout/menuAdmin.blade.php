<style>
    #menu-admin {
        width: 40vh;
        height: 100vh; 
    }

    .list-group-item {
        padding: 5.2vh;
        font-size: 4vh;
        background-color: #000;
        color: #ffff00;
    }
    .list-group-item a{
        color: #ffff00;
        text-decoration: none;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body>

    <div id="menu-admin">
        <ul class="list-group">
            <li class="list-group-item"><i class="bi bi-house"></i> <a href="{{ Route('conf.home') }}">Inicio</a></li>

            <li class="list-group-item"><i class="bi bi-person"></i> <a href="{{ Route('conf.perfil') }}">Perfil</a> </li>

            <li class="list-group-item"><i class="bi bi-people"></i> <a href="{{ Route('conf.portfolio') }}">Portfolio</a></li>

            <li class="list-group-item"><i class="bi bi-file-earmark-text"></i> <a href="{{ Route('conf.artigos.index') }}">Artigos</a> </li>

            <li class="list-group-item"><i class="bi bi-images"></i> <a href="{{ Route('conf.galeria') }}">Galeria</a></li>

            <li class="list-group-item"><i class="bi bi-box-arrow-left"></i> <a href="{{ Route('index') }}">Sair</a></li>

        </ul>
    </div>
</body>

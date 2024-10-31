<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/app.css">
    <style>
        #menu {
            width: 20%;
        }

        #quantitativo {
            width: 80vw;
            height: 50vh;
            top: 0;
            position: absolute;
            display: flex;
            justify-content: CENTER;
            right: 0;
        }

        H1 {
            float: LEFT;
            padding: 20vh;

        }

        .conteudo {
            background-color: #000;
            right: 1rem;
            position: absolute;
            border: 10px solid #000;
        }
    </style>
</head>

<body>
<div id="menu">@include('layout.menuAdmin')</div>
    <div id="conteudo">

        <div id="quantitativo">
            <H1 class="text-warning">Portfolio</H1>
            <H1 class="text-warning">Artigos</H1>

        </div>
       
    </div>


</body>

</html>
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

        H1 {
            font-size: 7rem;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7) float: LEFT;
            padding: 20vh;
            margin: 2rem 0;
            font-family: 'Anton';

            text-decoration: underline;
            /* Adiciona o sublinhado */
            text-decoration-color: #ffc107;
            /* Define a cor do sublinhado */
            text-decoration-thickness: 25px;
            /* Define a espessura do sublinhado */

        }

        .conteudo {
            background-color: #000;
            right: 1rem;
            position: absolute;
            border: 10px solid #000;
            text-align: center;
            margin-top: 20vh;
        }

        body {
            background-image: URL('{{ asset('images/FUNDO_ESCURO.PNG') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="menu">@include('layout.menuAdmin')</div>
    <div id="conteudo">

        <H1 class="text-warning">SEJA BEM-VINDO MESTRE</H1>

    </div>


</body>

</html>

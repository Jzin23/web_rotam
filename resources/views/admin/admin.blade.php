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
       #menu{
        width: 20%;
       }
        #quantitativo {
            background-color: #ccc;
            width: 81%;
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
    </style>
</head>

<body>
        <div id="conteudo">
            
            <div id="quantitativo">
                <H1>Portfolio</H1>
                <H1>Artigos</H1>
                
            </div>
            <div id="menu">
            @include('layout.menuAdmin')
            </div>
        </div>


</body>

</html>

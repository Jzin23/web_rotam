<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .noticia {

        margin: 5rem;
    }

    .imagem {
        width: 100%;
        border: 1px solid #000;

    }

    img {
        width: 100%;
        /* Faz a imagem ocupar toda a largura do card */
        height: 100%;
        /* Define uma altura fixa para todas as imagens */
        object-fit: cover;
        /* Garante que a imagem se ajuste sem distorcer */

    }
</style>

<body>
    @section('titulo', ' ARTIGOS')
    <!--@include('layout/menu')-->
    <article class="noticia">
        <h1>{{ $artigo->TITULO_ART}}</h1>
        <p style="color: #000;">{{ $artigo->SUBTITULO_ART }}</p>
        <div class="imagem">
            <img src="{{ asset('storage/artigos/fotos/' . $artigo->CAMINHO_FOTO) }}">
        </div>
        <br>
        <p style="color: #000;">{{ $artigo->CONTEUDO_ART }}</p>
    </article>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function abrirFoto(idFtoto) {


            const imagem = document.getElementById(idFtoto).style.height = '120%';
            const divImagens = document.getElementById('imagens1').style.height = '50rem';
            document.getElementById('imagens1').style.webkitTransition = '1s';

            let style = window.getComputedStyle(divImagens);
            let height = style.getPropertyValue('height');


            if (height == 50) {

            }
        }
    </script>
    <style>
        body {
            background-color: #000;

        }

        .carrossel {
            margin: 1rem;
            width: 100%;
            height: 17vw;
            position: relative;

        }

        .imagens {
            position: relative;
            width: 100%;
            height: 13vw;
            overflow: auto;
            display: flex;

        }

        .imagens img {
            position: relative;
            max-height: 80%;
            margin: 1rem;
        }

        .imagens::-webkit-scrollbar {
            /* width of the entire scrollbar */
            height: 10px;
        }

        .imagens::-webkit-scrollbar-track {
            background: #fff000;
            /* color of the tracking area */
        }

        .imagens::-webkit-scrollbar-thumb {
            background-color: #000;
            /* color of the scroll thumb */
            border-radius: 25px;
            /* roundness of the scroll thumb */
            border: 1px solid #fff000;
        }
        .imagensCarrocel {
            position: relative;
            width: 100%;
            height: 40vw;
            overflow: auto;
            display: flex;
        }
        .imagensCarrocel img{
            max-height: 100%;
            display: flex;
            margin: 1rem;
        }
    </style>
</head>

<body>
    <section class="carrossel">
        <h3>Fotos do evento x</h3>
        <div class="imagens" id="imagens1">
            <img src="{{ asset('image/rotam.jpg') }}" id="1" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="2" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="3" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="4" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="5" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="6" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="7" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="8" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="9" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="10"data-bs-toggle="modal" data-bs-target="#ModalNoticia">
            <img src="{{ asset('image/rotam.jpg') }}" ID="11" data-bs-toggle="modal" data-bs-target="#ModalNoticia">
        </div>

    </section>
    <hr style="border:1px solid #fff">




    <!--modal do carrocel -->
    <div class="modal fade bd-example-modal-lg" id="ModalNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="imagensCarrocel" id="imagens1">
            <img src="{{ asset('image/rotam.jpg') }}" ID="1">
            <img src="{{ asset('image/rotam.jpg') }}" ID="2">
            <img src="{{ asset('image/rotam.jpg') }}" ID="3">
            <img src="{{ asset('image/rotam.jpg') }}" ID="4">
            <img src="{{ asset('image/rotam.jpg') }}" ID="5">
            <img src="{{ asset('image/rotam.jpg') }}" ID="6">
            <img src="{{ asset('image/rotam.jpg') }}" ID="7">
            <img src="{{ asset('image/rotam.jpg') }}" ID="8">
            <img src="{{ asset('image/rotam.jpg') }}" ID="9">
            <img src="{{ asset('image/rotam.jpg') }}" ID="10">
            <img src="{{ asset('image/rotam.jpg') }}" ID="11">
        </div>
            </div>
        </div>
    </div>
</body>

</html>
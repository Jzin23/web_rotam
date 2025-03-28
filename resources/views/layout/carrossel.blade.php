<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function abrirModal(src) {
            document.getElementById("modalImage").src = src;
        }
    </script>
    <style>
        body {
            background-color: #000;
            color: white;
        }

        .titulo {
            padding: 1rem;
            color: #fff000;
            text-align: center;
        }

        .carrossel {
            margin: 1rem 0;
            width: 100%;
        }

        .imagens {
            width: 100%;
            overflow-x: auto;
            display: flex;
            padding: 10px;
        }

        .imagens img {
            width: 150px;
            /* Quadrado */
            height: 150px;
            /* Quadrado */
            object-fit: cover;
            /* Mantém a proporção */
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid #fff000;
        }

        .imagens::-webkit-scrollbar {
            height: 8px;
        }

        .imagens::-webkit-scrollbar-track {
            background: #fff000;
        }

        .imagens::-webkit-scrollbar-thumb {
            background-color: #000;
            border-radius: 10px;
            border: 1px solid #fff000;
        }

        h3 {
            color: #ccc;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <section class="carrossel">
        <div class="container">
            @foreach ($galerias as $galeria)
            <section class="carrossel">
                <h3>{{ $galeria->TITULO_CARROCEL }}</h3>
                <div class="imagens d-flex overflow-auto">
                    @foreach ($galeria->imagens as $foto)
                    <img src="{{ asset('storage/' . $foto->CAMINHO_FOTO) }}" class="img-thumbnail"
                        data-bs-toggle="modal" data-bs-target="#ModalNoticia" onclick="abrirModal(this.src)">
                    @endforeach
                </div>
            </section>
            @endforeach
        </div>


    </section>
    <hr style="border:1px solid #fff">


    <!--modal do carrocel -->
    <div class="modal fade" id="ModalNoticia" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid" alt="Imagem ampliada">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
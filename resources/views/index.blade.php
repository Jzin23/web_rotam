<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        ::-webkit-scrollbar {
            display: none;
        }
        #banner {
            width: 100vw;
            height: 85vh;
            background-color: #ccc;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-transform: scale(1.0)
        }

        .filtro {
            background-image: linear-gradient(to top, #000000, #000000, #000000, transparent);
            width: 100vw;
            height: 30vh;
            position: absolute;
            bottom: 0;
            color: #fff;

        }

        .filtro H1 {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        #fundo {
            position: absolute;
            width: 100%;
            /* Altere para 100% para ocupar toda a largura */
            height: auto;
            /* Define a altura de forma proporcional */
            max-height: 100vh;
            /* Limita a altura máxima ao tamanho da viewport */
            object-fit: cover;
            /* Mantém a imagem coberta sem distorção */

        }

        .historia {
            background-color: #ccc;
            width: 100vw;
            height: 30vh;
            position: absolute;
            bottom: 0;
            color: #000;
            display: flex;
            justify-content: center;

        }

        .conquista_missao {
            display: flex;

        }

        .conquista_missao_sub {
            width: 50%;
            height: 60vh;
            display: flex;
            justify-content: center;

            h1 {
                display: flex;
                justify-content: center;
            }
            
            .texto_conquista_missao {
                position: relative;
                top: 2rem;
                width: 90vh;

            }

        }



        #section_1 {
            background-color: #fff;

            h1 {
                color: #000;
            }

            p {
                color: #000;
                width: 90vh;
            }


        }

        #section_2 {
            background-color: #000;

            h1 {
                color: #fff;
            }

            p {
                color: #fff;
            }
        }

        #gremio_section_1 {
            background-color: #fff;

            h1 {
                color: #000;
            }

            p {
                color: #000;
                width: 90vh;
            }


        }

        #gremio_section_2 {
            background-color: #000;

            h1 {
                color: #fff;
            }

            p {
                color: #fff;
            }
        }

        .historia {
            position: relative;
            background-color: #000;
                height: 70rem;
        }
    </style>
</head>

<body>
    @section('titulo', ' HOME')
    @include('layout/menu')


    <div id="banner">
        <img src="{{ asset('image/rotam.jpg') }}" alt="logo" id="fundo">
        <div class="filtro">
            <h1>Projeto Social Jiu Jitsu</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsum dicta illum assumenda
                consequatur, nostrum voluptatibus voluptas tenetur molestias et officiis. Fugit voluptatem aliquam
                similique veniam officia animi nam illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                similique molestias nemo, perferendis aspernatur tenetur rem asperiores inventore pariatur assumenda!
                Magnam quam quisquam a facere quia laborum porro qui quibusdam!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere quae amet numquam praesentium,
                vero consequuntur vitae minima! Aliquid quidem quibusdam, nulla temporibus magni ipsa eveniet
                accusantium nobis expedita necessitatibus.

            </p>
        </div>
    </div>
    <section class="conquista_missao">
        <section class="conquista_missao_sub" id="section_1">
            <div class="texto_conquista_missao">
                <h1>CONQUISTAS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?</p>
            </div>
        </section>
        <section class="conquista_missao_sub" id="section_2">
            <div class="texto_conquista_missao">
                <h1>MISSÃO</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?</p>
            </div>

        </section>
    </section>





    <section class="historia">
        <div>
            @include('layout/historia')
        </div>
    </section>





    <div id="banner">

        <div class="filtro">
            <h1>O GREMIO</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsum dicta illum assumenda
                consequatur, nostrum voluptatibus voluptas tenetur molestias et officiis. Fugit voluptatem aliquam
                similique veniam officia animi nam illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                similique molestias nemo, perferendis aspernatur tenetur rem asperiores inventore pariatur assumenda!
                Magnam quam quisquam a facere quia laborum porro qui quibusdam!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis facere quae amet numquam praesentium,
                vero consequuntur vitae minima! Aliquid quidem quibusdam, nulla temporibus magni ipsa eveniet
                accusantium nobis expedita necessitatibus.

            </p>
        </div>
    </div>
    <section class="conquista_missao">
        <section class="conquista_missao_sub" id="gremio_section_1">
            <div class="texto_conquista_missao">
                <h1>CONQUISTAS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?</p>
            </div>
        </section>
        <section class="conquista_missao_sub" id="gremio_section_2">
            <div class="texto_conquista_missao">
                <h1>MISSÃO</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum debitis ipsum asperiores magnam maiores in ad. Provident repellat officiis unde, debitis natus assumenda error veritatis earum doloribus repudiandae? Reprehenderit, quam?</p>
            </div>
        </section>
    </section>


    @include('layout/rodape')
</body>

</html>
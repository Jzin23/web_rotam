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

        #banner_inicio {
            width: 100%;
            height: auto;
            background-color: #ccc;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-transform: scale(1.0);
            display: flex;
            flex-direction: column;
            position: relative;
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
            position: relative;
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
            position: relative;
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
        #banner_gremio {
            width: 100vw;
            height: 85vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-transform: scale(1.0);
            margin-top: auto;

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


    <div id="banner_inicio">
        <img src="{{ asset('images/equipe 2.jpg') }}" alt="logo" id="fundo">
        <div class="filtro">
            <h1>Projeto Social Jiu Jitsu</h1>
            <p>O projeto social Jiu-Jitsu ROTAM – Formando Cidadãos, é um projeto de prevenção primaria que tem a
                realização e coordenação do (Batalhão de ROTAM), com parceria do Grêmio Recreativo e Esportivo ROTAM
                (G.R.E.R), e com registro e certificação Conselho Municipal da Criança e do Adolescente de Cuiabá. A
                coordenação é realizada por policiais pertencentes ao Batalhão ROTAM da Polícia Militar do Estado de
                Mato Grosso, Certificados e licenciados para instrução de artes marciais (Braziliam Jiu-Jitsu) através
                da equipe Checkmat Brasil – Na qual seu lider Ricardo Alcantara Vieria – Faixa preta 4 Graus Licenciado
                pela Confederação Brasileira de Jiu-Jitsu (CBJJ) e International Brazilian Jiu-Jitsu Federation.

            </p>
        </div>
    </div>
    <section class="conquista_missao">
        <section class="conquista_missao_sub" id="section_1">
            <div class="texto_conquista_missao">
                <h1>CONQUISTAS</h1>
                <p> Sabendo da localização e a importância do Batalhão ROTAM dentro da comunidade do bairro Dom Aquino e
                    região, podemos atender ocorrências complexas com maior velocidade por estarmos em uma região
                    central e assim, dando maior sensação de segurança para toda Grande Cuiabá. Com a mesma intensão,
                    Projeto Jiu-Jitsu ROTAM, consegue atender também, uma maior quantidade de pessoas devido ao seu
                    local que é de fácil acesso e bem localizado.
                </p>
                <p>PROJETO JIU-JITSU ROTAM, desde seu primeiro ano de existência vem conquistando inúmeros títulos
                    estaduais e conforme fomos crescendo conseguimos também titulos a nível nacional. Todo nosso
                    trabalho foi iniciado e desenvolvido do zero e dentro do Batalhão ROTAM. Certamente que com o apoio
                    e incentivo proporcional ao projeto, certamente conquistaremos competições internacionais. Além de
                    transformar a vida destes atletas, estaremos incentivando um maior numero de crianças que irão se
                    espelhar nestes pequenos campeões.
                </p>
            </div>
        </section>
        <section class="conquista_missao_sub" id="section_2">
            <div class="texto_conquista_missao">
                <h1>MISSÃO</h1>
                <p>Envolver as crianças e adolescentes em situação de vulnerabilidade social, bem como suas famílias,
                    num conjunto de ações que possibilitam a construção da cidadania e do desenvolvimento físico
                    psicológico e educacional dos mesmos;
                </p>

                <p>• Estimular e promover atividades voltadas para a formação da criança e do adolescente numa
                    perspectiva de colaborar com seu processo de evolução, como parte integrante da sociedade;
                </p>
                <p>• Melhorar, através dos ensinamentos do Jiu-Jitsu, a auto estima, a disciplina a cidadania, o
                    convívio familiar, a integração na comunidade, provocando com isso uma verdadeira mudança na vida
                    das crianças e adolescentes.
                </p>
            </div>

        </section>
    </section>

    <section class="historia">
        <div>
            @include('layout/historia')
        </div>
    </section>





    <div id="banner_gremio">
        <img src="{{ asset('images/gremio 1.jpeg') }}" alt="logo" id="fundo">
        <div class="filtro">
            <h1>O GREMIO</h1>
            <p>O projeto social JIU-JITSU ROTAM – Formando Cidadãos, é um projeto de prevenção primaria que tem a
                realização e coordenação do (Batalhão de ROTAM), com parceria do Grêmio Recreativo e Esportivo ROTAM
                (G.R.E.R), e com registro e certificação Conselho Municipal da Criança e do Adolescente de Cuiabá. A
                coordenação é realizada por policiais pertencentes ao Batalhão ROTAM da Polícia Militar do Estado de
                Mato Grosso, Certificados e licenciados para instrução de artes marciais (Braziliam Jiu-Jitsu) através
                da equipe Checkmat Brasil – Na qual seu lider Ricardo Alcantara Vieria – Faixa preta 4 Graus Licenciado
                pela Federação Brasileira de Jiu-Jitsu (CBJJ) e International Brazilian Jiu-Jitsu Federation.


            </p>
        </div>
    </div>


    @include('layout/rodape')
</body>

</html>
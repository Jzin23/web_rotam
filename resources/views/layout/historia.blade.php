<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{

            h1{
                text-align: center;
            color: #fff;
        }
        }
/* Timeline */
.timeline {
    list-style: none;
    padding: 20px;
    position: relative;
  &:before {
        top: 40px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #fff;
        left: 50%;
        margin-left: -1.5px;
    }
  .timeline-item {
        margin-bottom: 20px;
        position: relative;
    &:before,
    &:after {
            content: "";
            display: table;
        }
    &:after {
            clear: both;
        }
    .timeline-badge {
            color: #fff;
            width: 54px;
            height: 54px;
            line-height: 52px;
            font-size: 22px;
            text-align: center;
            position: absolute;
            top: 18px;
            left: 50%;
            margin-left: -25px;
            background-color: #ffff00;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
      i, .fa, .glyphicon {
        top: 2px;
        left: 0px;
      }
        }
    .timeline-panel {
            position: relative;
            width: 46%;
            float: left;
      right: 16px;
            border: 1px solid #ccc;
      background: #fff;
            border-radius: 2px;
            padding: 20px;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
      &:before {
                position: absolute;
                top: 26px;
                right: -16px;
                display: inline-block;
                border-top: 16px solid transparent;
                border-left: 16px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 16px solid transparent;
                content: " ";
            }
      .timeline-title {
          margin-top: 0;
          color: inherit;
      }
      .timeline-body > p,
      .timeline-body > ul {
          margin-bottom: 0;
      }
      .timeline-body > p + p {
            margin-top: 5px;
        }
        }
    }
  .timeline-item:last-child {
    &:nth-child(even) {
      float: right;
    }
  }
  .timeline-item:nth-child(even) {
    .timeline-panel {
      float: right;
      left: 16px;
      &:before {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
      }
    }
  }
}
.timeline-horizontal:extend(.timeline) {
    list-style: none;
    position: relative;
  padding: 20px 0px 20px 0px;
  display: inline-block;
  &:before {
        height: 3px;
    top: auto;
        bottom: 26px;
    left: 56px;
    right: 0;
    width: 100%;
    margin-bottom: 20px;
    }
  .timeline-item {
    display: table-cell;
    height: 280px;
    width: 20%;
    min-width: 320px;
    float: none !important;
    padding-left: 0px;
    padding-right: 20px;
    margin: 0 auto;
    vertical-align: bottom;
    .timeline-panel {
      top: auto;
      bottom: 64px;
      display: inline-block;
      float: none !important;
      left: 0 !important;
      right: 0 !important;
      width: 100%;
      margin-bottom: 20px;
      &:before {
              top: auto;
              bottom: -16px;
        left: 28px !important;
        right: auto;
                border-right: 16px solid transparent !important;
                border-top: 16px solid #000 !important;
                border-bottom: 0 solid #ccc !important;
                border-left: 16px solid transparent !important;
            }
    }
    &:before,
    &:after {
            display: none;
        }
    .timeline-badge {
            top: auto;
            bottom: 0px;
            left: 43px;
        }
    
  }
}

    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h1>Informações sobre a academia</h1>
          </div>
          <div style="display:inline-block;width:100%;overflow-y:auto;">
          <ul class="timeline timeline-horizontal">
            <li class="timeline-item">
              <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">PRIMEIRA AULA</h4>
                </div>
                <div class="timeline-body">
                  <p>	Todo inicio  é muito difícil  e desta forma não foi diferente com o Projeto Jiu-Jitsu ROTAM. Nossa primeira aula, se iniciou no  dia 06 de Fevereiro de 2013, dentro da sala de instrução do Batalhão ROTAM e com apenas 10 alunos da LBV, que fica ao lado do Batalhão e com 18 placas de tatames emprestados, para podermos  dar inicio as aulas de Jiu-jitsu.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">OBJETIVOS GERAIS</h4>
                </div>
                <div class="timeline-body">
                  <p>Melhorar, através dos ensinamentos do Jiu-Jitsu, a auto estima, a disciplina a cidadania, o convívio familiar, a integração na comunidade, provocando com  isso uma verdadeira mudança na vida das crianças e adolescentes.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">OBJETIVOS ESPECIFICOS</h4>
                </div>
                <div class="timeline-body">
                  <p>Acompanhar a evolução comportamental dos atletas na escola e no lar, através da parceria com os pais, nos mantendo sempre informados das alterações comportamentais adversas que possam estar ocorrendo.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">IMPORTÂNCIA DO PROJETO</h4>
                </div>
                <div class="timeline-body">
                  <p>	Ao longo destes seis anos de trabalho social ensinando e orientando nossos jovens a serem excelentes cidadãos, desenvolveu-se um vinculo muito grande com os pais da comunidade, no qual enxergam em nosso trabalho como uma grande ferramenta para desenvolvimento e transformação destes jovens em ótimas referencias no convívio familiar e social.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Justificativa</h4>
                </div>
                <div class="timeline-body">
                  <p>O Jiu-Jitsu não é apenas uma luta de arte marcial em que o objetivo é do adversário e apenas lutar. Do inicio ao fim das aulas, são envolvidas na riqueza de uma filosofia que transforma a disciplina e o equilíbrio em forma de viver e respeitar o semelhante.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        </div>
      </div>
    </div>

    
</body>
</html>
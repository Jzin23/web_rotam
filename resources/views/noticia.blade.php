<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .noticia{
           
                margin: 5rem;
        }
        .imagem{
            width: 100%;
             border: 1px solid #000;
            
        }
        img{
                max-width:  100%;
             }
       
    </style>
<body>
    @section('titulo', ' ARTIGOS')
    <!--@include('layout/menu')-->
        <article class="noticia">
            <h1>O titulo da noticia</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, magnam quia excepturi quas consequuntur, architecto quam officia aut quo sequi at tempore provident. Nemo temporibus vel perferendis explicabo repellendus?</p>
            <div class="imagem">
                <img src="{{asset('image/rotam.jpg')}}">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quis autem eaque cumque deserunt culpa obcaecati illum eos tempore aspernatur ab tenetur voluptates et praesentium aliquam, provident labore similique neque.</p>
        </article>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <style>
        .card-deck {
            display: flex;

            .card {
                margin: 5rem;
            }
        }
    </style>
</head>
@section('titulo', ' PORTFOLIO')
@include('layout/menu')

<body>
    <h1>Os portfolios de nossos atletas</h1>

    <div class="portfolio">

        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('image/rotam.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
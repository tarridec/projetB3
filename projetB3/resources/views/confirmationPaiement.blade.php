<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
        <title>Confirmation Achat</title>
    </head>

    <body>
        @include('partials.navbar')

        <main>
            <section class="containerAchat tt-center">
                <div class="cardAchatTermine">
                    <h1>Merci pour votre achat !</h1>
                    <img src="https://gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-pc-jeu-steam-europe-cover.jpg?v=1706806182" alt="">
                    <h2>Hogwarts Legacy : L'Héritage de Poudlard </h2>
                    <div class="steamKeyCard">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Steam_icon_logo.svg/2048px-Steam_icon_logo.svg.png" alt="">
                        <p class="steamKey">tff90-ax8vp-fb2xb</p>
                    </div>
                    <p class="carAchatTermineContinuer">Continuer vos achats</p>
                </div>

            </section>
        </main>

        <style>
            main{
                background-color: #e5e7eb;
                min-height: 100vh;
                display: flex;
                flex-flow: column nowrap;
                justify-content: center;
            ;}
            .containerAchat{
                width: 900px;
                margin: 0 auto;
            }
            .tt-center{
                text-align: center;
            }
            div.cardAchatTermine{
                background-color: #fff;
                padding: 3%;
                box-shadow: 0px 0px 6px #00000020;
                display: flex;
                flex-flow: column nowrap;
                justify-content: center;
                align-items: center;
                width: 100%;
                border-radius: 10px;
                text-align: center;
                gap: 20px;
            }
            div.cardAchatTermine h1, div.cardAchatTermine h2, p{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 600;
            }
            div.cardAchatTermine img{
                border-radius: 10px;
                max-width: 400px;
            }
            .steamKeyCard{
                background-color: #e5e7eb;
                border-radius: 10px;
                width: 600px;
                padding: 20px 10px 20px 10px;
                margin-top: 20px;
            }
            .steamKeyCard img{
                position: relative;
                left: 47%;
                width: 40px;
                margin-top: -40px;
            }
            .steamKey{
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 8px;
                font-size: 20px;
            }
            .carAchatTermineContinuer{
                color: #3b82f6;
            }
        </style>

        @include('partials.footer')
    </body>
</html>
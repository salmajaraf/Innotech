<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InnoTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/coullogoinnotech.png') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">


</head>
<body>
    <div class="container">
        <div class="icone">
            <img src="{{ asset('assets/images/whitelogoinnotech.png') }}" alt="logorenocraft.png">
        </div>
        <div class="links">
            <ul>
                <li><a class="link" href="#home">Accueil</a></li>
                <li><a class="link" href="#about">À Propos</a></li>
                <li><a class="link" href="#contact">Nous Contacter</a></li>
                <li><a class="link btn" href="#">Se Connecter</a></li>
            </ul>
        </div>
    </div>
    <main>
        @yield('body')
    </main>
    <div class='part2' id='about'>
        <div class="logo">
            <img src="{{ asset('assets/images/coullogoinnotech.png') }}" alt="logorenocraft.png">
        </div>
        <div class="description">
            <h2>À Propos</h2>
            <p>InnoTech, c'est l'innovation numérique incarnée. Notre expertise allie la pointe technologique à une créativité inépuisable, façonnant des expériences exceptionnelles. De la conception web aux stratégies marketing, chaque initiative témoigne de notre engagement à redéfinir l'excellence numérique. Optez pour InnoTech : bien plus qu'une agence, un partenaire résolu à faire de chaque projet une réussite mémorable.</p>
        </div>
    </div>
    
    <div class="colabsec">
        <h2>Nos Collaborateurs</h2>
        <div class="cont1">
            <div class="colab1">
                <div class="image1">
                    <img src="{{ asset('assets/images/cisco.png') }}" alt="logorenocraft.png">
                </div>
            </div>
            <div class="colab1">
                <div class="image">
                    <img src="{{ asset('assets/images/cisco.png') }}" alt="logorenocraft.png">
                </div>
            </div>
            <div class="colab1">
                <div class="image">
                    <img src="{{ asset('assets/images/aws.png') }}" alt="logorenocraft.png">
                </div>
            </div>
            <div class="colab1">
                <div class="image">
                    <img src="{{ asset('assets/images/google.png') }}" alt="logorenocraft.png">

                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <p>Copyright All Rights Reserved © 2023 YE - SJ - OK InnoTech</p>
    </div>
</body>
</html>

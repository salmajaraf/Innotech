<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InnoTech</title>
    
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collab.css') }}">


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
    
    <div class="colabsec">
        <h2>Nos Collaborateurs</h2>
        <div class="cont1">
            <div class="colab1">
                <div class="image1">
                    <img src="{{ asset('assets/images/ibm.png') }}" alt="logorenocraft.png">
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

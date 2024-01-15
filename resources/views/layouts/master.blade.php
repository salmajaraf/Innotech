<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InnoTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/coullogoinnotech.png') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">

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
                <li><a class="link btn" href="{{ route('login') }}">Se Connecter</a></li>
            </ul>
        </div>
    </div>
    <main>
        @yield('body')
    </main>
    <div class="footer">
        <p>Copyright All Rights Reserved © 2023 YE - SJ - OK InnoTech</p>
    </div>
</body>
</html>

</body>
</html>
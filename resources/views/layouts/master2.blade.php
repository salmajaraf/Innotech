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
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chiffre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

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
    

    <div class="chi">
        <h2>Notre Réussite en Chiffres</h2>
        <div class="cont">
            <div class="chi1 border">
                <div class="image">
                    <h1>20</h1>
                    <img src="{{ asset('assets/images/trophe.png') }}" alt="logorenocraft.png">
                </div>
                <div class="para">
                    <p>RÉCOMPENSES</p>
                </div>
            </div>
            <div class="chi1 border">
                <div class="image">
                    <h1>721</h1>
                    <img src="{{ asset('assets/images/projet.png') }}" alt="logorenocraft.png">
                </div>
                <div class="para">
                    <p>PROJETS</p>
                </div>
            </div>
            <div class="chi1 border">
                <div class="image">
                    <h1>588</h1>
                    <img src="{{ asset('assets/images/client.png') }}" alt="logorenocraft.png">
                </div>
                <div class="para">
                    <p>CLIENTS SATISFAITS</p>
                </div>
            </div>
            <div class="chi1">
                <div class="image">
                    <h1>32</h1>
                    <img src="{{ asset('assets/images/membre.png') }}" alt="logorenocraft.png">
                </div>
                <div class="para">
                    <p>MEMBRES</p>
                </div>
            </div>
    
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

    <div class="contact" id="contact">
        <h1 class="ticlair chlen">Contactez-Nous</h1>
        <div class="information">
            <div class="imgcontact">
                <p>Coordonnées de contact</p>
                <div class="ye">
                <div class="coord1">
                    <div class="icocoord">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="coordinfo">
                        <h3>Notre bureau</h3>
                        <p>123 rue, Rabat, MAROC</p>
                    </div>
                </div>
                <div class="coord1">
                    <div class="icocoord">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="coordinfo">
                        <h3>Appelez-nous</h3>
                        <p>+212 5 37 15 20 85</p>
                    </div>
                </div>
                <div class="coord1">
                    <div class="icocoord">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="coordinfo">
                        <h3>Envoyez-nous un courriel</h3>
                        <p style="text-align: start">InnoTech&#64;gmail.com</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="formu">
                <form id="form" method="POST"  action="{{route('addavis')}}">
                    <p>Posez vos questions ici</p>
                    <input type="email" placeholder="Adresse Email" name="email" required/><br/>
                    <input type="text" placeholder="Nom" name="nom" required/><br/>
                    <input type="text" placeholder="Prénom" name="prenom" required /><br/>
                    <textarea placeholder="Message" name="message" required></textarea><br/>
                    <input type="submit" value="Envoyer"/>
                </form>
            </div>
        </div>
        <div class="retour">
            <div class="mon"><a href="#" class="fleche"><i class="fa-solid fa-arrow-up"></i></a></div>
        </div>
    </div>

    <div class="footer">
        <p>Copyright All Rights Reserved © 2023 YE - SJ - OK InnoTech</p>
    </div>
</body>
</html>

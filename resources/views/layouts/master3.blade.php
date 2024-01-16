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
      <li><a class="link" href="{{route('Home2')}}">Accueil</a></li>
      <li><a class="link" href="{{route('Webdev')}}">Web App</a></li>
      <li><a class="link" href="{{route('Securite')}}">Security</a></li>
      <li><a class="link" href="{{route('Appdev')}}">Mobile App</a></li>
      <li><a class="link" href="{{route('Home2')}}">Postuler</a></li>
      <li><a class="link" href="{{route('panier')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg></a>
      </li>
      <li><a class="link" href="{{route('Home2')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg></a>
      </li>
      <li><form method="post" action="{{route('logout')}}"><button class="link" style="background-color: transparent; border:none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
        </svg></button></form>
      </li>
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

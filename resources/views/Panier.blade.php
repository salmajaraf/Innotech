@extends('layouts.master3')
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packs</title>
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">

</head>
<body>
<div class="cartsec">
    <h2>Votre Sélection - Panier</h2>
    <!--pop up-->
    <div class="overlay2" id="filtreVerif"></div>
    <div class="packbloc" id="popVerif">
        <div class="fermer">
            <i class="fa-solid fa-xmark" onclick="closeVerif()"></i>
        </div>
        <div class="imgcart">
            <img src="{{ asset('assets/images/whitelogoinnotech.png') }}" alt="jk.png">
        </div>
        <div class="content">
            <div class="cont1">
                <h3  >Planification De Rendez-Vous</h3>
            </div>
            <div class="cont4">
                <form method="POST" action="{{route('addcommande')}}">
                    @csrf
                    <div>
                    <label for="email">Email : </label>
                    <br>
                        <input type="hidden" name="templateIds" id="idsInput">
                    <input type="text" required class="inputlong" id="email" name="email" disabled value="{{ $userinfo->email }}"></div>
                    <div class="groupdeinput">
                        <div class="inputgroup1">
                        <label for="date">Date :</label><br>
                        <input type="date" required id="date" name="dateCommande">
                        </div>
                        <div class="inputgroup2">
                        <label for="heure">Heure :</label><br>
                        <input type="time" required id="heure" name="heureCommande">
                        </div>
                    </div>
                    <div class="subdiv">
                        <input type="submit" value="Envoyer" class="subinput" onclick="validMessage()">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--pop up-->
    <div id="cartcont">
        <p id="msgvide" class="pmesg">Votre Panier est Vide</p>
    </div>
    <div class="btnclass" id="btnid">
    </div>
</div>
</body>
<script src="{{ asset('js/panier.js') }}">

</script>
</html>
@endsection
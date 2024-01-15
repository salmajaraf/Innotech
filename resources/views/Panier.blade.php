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
            <img th:src="@{/images/whitelogorenocraft.png}" alt="jk.png">
        </div>
        <div class="content">
            <div class="cont1">
                <h3  >Planification De Rendez-Vous</h3>
            </div>
            <div class="cont4">
                <form method="post" th:object="${cart}" th:action="@{/cart}" >
                    <div>
                    <label for="tel">Numéro de Téléphone : </label>
                    <br>
                        <input type="hidden" name="packIds" id="idsInput">
                    <input type="text" required class="inputlong" id="tel" name="tel" disabled th:value="${cart.get().getPhone()}"></div>
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

        <!--<div class="packcart">
            <div class="imgcart">
                <img th:src="@{/images/pack1.png}" alt="cart.png">
            </div>
            <div class="grand">
            <div class="contcartpack">
                <h4>Pack de Rénovation pour Jardin</h4>
                <p>Transformez votre jardin en un oasis de détente avec notre pack de rénovation spécial pour jardin.</p>
            </div>
            <div class="pricedelete">
                <h4>À Partir de 250$</h4>
                <i class="fa-solid fa-trash" onclick="delete(1)"></i>
            </div>
            </div>
        </div>-->
    </div>
    <div class="btnclass" id="btnid">
        <!--<button>Comfirmer</button>-->
    </div>
</div>
</body>
<script src="{{ asset('js/panier.js') }}">

</script>
</html>
@endsection
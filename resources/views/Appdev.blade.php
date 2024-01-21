@extends('layouts.master3')
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packs</title>
    <link rel="stylesheet" href="{{ asset('css/pack.css') }}">

</head>
<body>
    <div class="pack">
      <h2 class="h2b">Mobile Applications</h2>
        <p>Découvrez l'essence de l'innovation numérique à travers nos collections captivantes d'application mobile.</p>
        <div class="pack1">
            <div class="souspack16" id="souspack1">
                <div  class="imgpack"  style="padding-right: 60px;">
                    <img src="{{ asset('assets/images/app1.jpg') }}" alt="pack.png" class="leftborder" >
                </div>
                <div class="description25" style="padding-left: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle Mobile App 1 :</h2>
                        <p>Explorez l'élégance fonctionnelle avec ce modèle d'application mobile. Une interface intuitive et des fonctionnalités avancées créent une expérience utilisateur exceptionnelle.</p>
                        <p><strong>Langages :</strong> Swift</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 3000 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(5)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="souspack16" id="souspack2">
                
                <div class="description25" style="padding-right: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle Mobile App 2 :</h2>
                        <p>Découvrez l'innovation mobile avec ce modèle captivant. Des designs dynamiques et une navigation fluide offrent une expérience utilisateur moderne et engageante.</p>
                        <p><strong>Langages :</strong> Kotlin</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 3500 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(6)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div  class="imgpack"  style="padding-left: 120px;">
                    <img src="{{ asset('assets/images/app2.jpg') }}" alt="pack.png" class="leftborder" >
                </div>
            </div>

            <div class="souspack16" id="souspack3">
                <div  class="imgpack"  style="padding-right: 60px;">
                    <img src="{{ asset('assets/images/app3.jpg') }}" alt="pack.png" class="leftborder" >
                </div>
                <div class="description25" style="padding-left: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle Mobile App 3 :</h2>
                        <p>Plongez dans le futur de l'application mobile avec ce modèle révolutionnaire. Des fonctionnalités avancées et une esthétique élégante en font un choix incontournable.</p>
                        <p><strong>Langages :</strong> React Native</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 4000 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(7)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="souspack16" id="souspack4">
                
                <div class="description25" style="padding-right: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle Mobile App 4 :</h2>
                        <p>Expérimentez l'élégance haut de gamme avec ce modèle d'application mobile. Une combinaison de design moderne et de performances exceptionnelles pour une expérience utilisateur sans compromis.</p>
                        <p><strong>Langages :</strong> Flutter</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 4500 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(8)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div  class="imgpack"  style="padding-left: 120px;">
                    <img src="{{ asset('assets/images/app4.jpg') }}" alt="pack.png" class="rightborder">
                </div>
            </div>
            
        </div>
    </div>
</body>
<script src="{{ asset('js/appdev.js') }}">

</script>
</html>
@endsection
@extends('layouts.master2')
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
      <h2 class="h2b">Web Applications</h2>
        <p>Découvrez l'essence de l'innovation numérique à travers nos collections captivantes d'application web.</p>
        <div class="pack1">
            <div class="souspack16" id="souspack1">
                <div  class="imgpack"  style="padding-right: 60px;">
                    <img src="{{ asset('assets/images/temp1.jpg') }}" alt="pack.png" class="leftborder" >
                </div>
                <div class="description25" style="padding-left: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle 1 :</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio.</p>
                        <p><strong>Langages :</strong> Vue.js - Python (Django) - PostgreSQL - TypeScript</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 2500 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(1)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="souspack16" id="souspack2">
                
                <div class="description25" style="padding-right: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle 2 :</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio.</p>
                        <p><strong>Langages :</strong> Angular - Java - MySQL - Kotlin</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 3500 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(2)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div  class="imgpack"  style="padding-left: 120px;">
                    <img src="{{ asset('assets/images/temp2.jpg') }}" alt="pack.png" class="rightborder">
                </div>
            </div>

            <div class="souspack16" id="souspack3">
                <div  class="imgpack"  style="padding-right: 60px;">
                    <img src="{{ asset('assets/images/temp3.jpg') }}" alt="pack.png" class="leftborder" >
                </div>
                <div class="description25" style="padding-left: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle 3 :</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio.</p>
                        <p><strong>Langages :</strong> React - Express.js - MongoDB - Js</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 4000 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(3)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="souspack16" id="souspack4">
                
                <div class="description25" style="padding-right: 45px;">
                    <div class="cont100">
                        <h2 class="h2modele">Modèle 4 :</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio.</p>
                        <p><strong>Langages :</strong> Angular - Express.js - MongoDB - Js</p>
                    </div>
                    <div class="cont101">                
                        <div class="supcont">
                            <p><strong>Prix : 4500 Dh</strong></p>
                            <div class="supcont2"><button onclick="addPanier(4)">Ajouter Au Panier &nbsp;&nbsp;<i class="fa-solid fa-circle-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div  class="imgpack"  style="padding-left: 120px;">
                    <img src="{{ asset('assets/images/temp4.jpg') }}" alt="pack.png" class="rightborder">
                </div>
            </div>
            
        </div>
    </div>
</body>
<script src="{{ asset('js/webpanier.js') }}">

</script>
</html>
@endsection
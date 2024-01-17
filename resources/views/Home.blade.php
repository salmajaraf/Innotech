@extends('layouts.master2')
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">


</head>
<body>
    <div  class="banner" id="home">
        <h1 class="hometitre">InnoTech</h1>
        <a href="#">Créer Un Compte</a>
    </div>
    <div class='part2' id='about'>
        <div class="logo">
            <img src="{{ asset('assets/images/coullogoinnotech.png') }}" alt="logorenocraft.png">
        </div>
        <div class="description">
            <h2>À Propos</h2>
            <p>InnoTech, c'est l'innovation numérique incarnée. Notre expertise allie la pointe technologique à une créativité inépuisable, façonnant des expériences exceptionnelles. De la conception web aux stratégies marketing, chaque initiative témoigne de notre engagement à redéfinir l'excellence numérique. Optez pour InnoTech : bien plus qu'une agence, un partenaire résolu à faire de chaque projet une réussite mémorable.</p>
        </div>
    </div>
    <div class="pack">
      <h2>Nos Services</h2>
        <p>Créez l'extraordinaire avec Innotech : web, apps, sécurité - l'innovation à portée de clic</p>
        <div class="slider">
            <a href="{{route('Webdev')}}" style="text-decoration: none;">
            <div class="slide1">
            <div>
                <img src="{{ asset('assets/images/deweb.jpg') }}"></div>
                <div><p style="font-family: Rund Display;">Dev Web &nbsp;<i class="fa-solid fa-arrow-right"></i></p></div>
            </div>
            </a>
            <a href="{{route('Securite')}}" style="text-decoration: none;">
            <div class="slide2">
                
                <img src="{{ asset('assets/images/securite.jpg') }}">
                <p style="font-family: Rund Display;">CyberSecurity &nbsp;<i class="fa-solid fa-arrow-right"></i></p>
            </div>
            </a>
            <a href="{{route('Appdev')}}" style="text-decoration: none;">
            <div class="slide3">
                
                <img src="{{ asset('assets/images/devapp.jpg') }}">
                <p style="font-family: Rund Display;">Dev Mobile &nbsp;<i class="fa-solid fa-arrow-right"></i></p>
            </div>
            </a>
        </div>
    </div>

</body>
</html>
@endsection
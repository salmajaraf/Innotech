@extends('layouts.master3')
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packs</title>
    <link rel="stylesheet" href="{{ asset('css/securite.css') }}">

</head>
<body>
    <div class="pack">
      <h2 class="h2b">CyberSecurity</h2>
        <p>Plongez dans un réseau où chaque nom incarne une expertise exceptionnelle. Bienvenue dans l'élite de la sécurité.</p>
        <div class="pack1">

            <div class="imgsecurite">
                <img src="{{ asset('assets/images/securitewallpaper.png') }}" alt="pack.png">
            </div>
            <div class="contactsecu"  style="margin-left: 90px;">
                <div class="desc25" style="padding-left: 45px;">
                    <div class="titti" style="text-align :center;">
                        <h2 >Coordonnées :</h2>
                    </div>
                    <div class="contsecuinfo"> 
                    @foreach($socdata as $donnee)               
                        <div class="supcontsecu" style="border-bottom: 1px solid black;">
                            <h3><strong>{{ $donnee->nomsoc }}</strong></h3>
                            <p><i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp; {{ $donnee->adressesoc }}</p>
                            <p><i class="fa-solid fa-phone"></i> &nbsp;&nbsp; {{ $donnee->telsoc }}</p>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
<script src="{{ asset('js/appdev.js') }}">

</script>
</html>
@endsection
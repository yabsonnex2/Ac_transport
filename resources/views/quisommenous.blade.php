<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui somme nous</title>
    <link rel="stylesheet" href="{{asset('css/qui-somme-nous.css')}}">
        <link rel="stylesheet" href="{{asset('cssd/css/all.min.css')}}">
     
    
</head>
<body>
   

            
@include('header')
    <div class="centre"><br><br>
        <h3> AC-TRANSPORT :Qui somme nous</h3>
        <p>
          <div class="info"> Une société de transport specialisée
            dans, le VTC, le TAXI et le Transport de 
            marchandises. Nous offrons des services de 
            gestion de flotte de Taxi, d'achat vente et
             location de véhicule ainsi que le transport de
             marchandise et de la logistique</div>
            <ul class="listes">
                

             <ul>  
                    <li class="liste1"><a href="gestion" class="lien"> GESTION</a></li>
                <br>
             <li class="liste2"><a href="achatventelocation"class="lien">ACHAT, VENTE & LOCATION DE VEHICULES </a></li>
                <br>
            <a>   <li class="liste3"><a href="logistiquetransport" class="lien">LOGISTIQUE & TRANSPORT DE MARCHANDISE</a></li>
            </ul>
               
                
                 
            </ul>
            <br> 
            <br>
            
        </p>

        <div class="membres">
            <h3 style="position: relative;top: -10px;">NOS PARTENAIRES</h3>
            <div class="nos-images">
                <div class="devellopeur-frontend">
                   <h4 class="h4jean">GBANE YACOUBA <br> <strong></strong></h4>
                </div>
                <div class="devellopeur-backend">
                    <h4> GBANE YACOUBA <br> <strong></strong></h4>
                </div>
                <div class="securite">
                    <h4 class="h4eric">GBANE YACOUBA <br> <strong></strong></h4> 
                </div>
            </div>
        </div>

    </div>

    @include('footer')

           
    <script src="{{ asset ('js/acceuil.js') }}"></script>
</body>
</html>




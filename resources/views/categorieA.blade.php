<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorieA</title>
    <link rel="stylesheet" href="categorieA.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link href="img/dolphin.png" rel="shortcut icon">
</head>
<body>




    @include('header')

    
    <div class="centre">
    <div class="cas-parent">
            
        <div class="cas2">
           <div class="haut2">
               <p>toyota corola</p>
               <br>
               <P>nouvelle generation</P>
           </div>

           <div class="prix2">
               
               <hr>
               <span class="sommeafficher2">700.000.000.000<span style="font-family: sans-serif;font-size: 15px;position: relative;">FCFA</span></span>
           </div>
           
           <div id="caroussel">
            <div class="mesimages">
       
        <img src="img/buga1.jpg" class="voiture-choisie"/>
        <img src="img/buga-1.png" class="voiture-choisie"/>
        <img src="img/buga-2.jpg" class="voiture-choisie"/>
        <img src="img/buga-2.jpg" class="voiture-choisie"/>
            </div>
            
            
        </div>
           
        <div class="patron">
            <a href="voir.html"> <input type="submit" value="VOIR" class="voir" required></a>
            <a href="location.html"> <input type="submit" value="LOUER" class="louer" required></a>
            <a href="rendezvous.html"> <input type="submit" value="RDV" class="acheter" required></a>
       </div>
    </div>
    </div>
    
    </div>
   
    @include('footer')
     <script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
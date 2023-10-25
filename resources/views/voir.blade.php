<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voir</title>
    <link rel="stylesheet" href="css/voir.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link href="img/dolphin.png" rel="shortcut icon">
</head>
<body>




@include('header')

    



            <!-- HEADER END -->
        
       
        <!--	section:	CHARACTERISTICS	-->
        
    
            <h1 class="title">toyota corola</h1>
            <p class="sommeafficher2">100 000 000 <span >FCFA</span></p>
            
            <div class="mesimages">
                <img src="img/buga1.jpg" class="voiture-choisie"/>
                <img src="img/buga-1.png" class="voiture-choisie"/>
                <img src="img/buga-2.jpg" class="voiture-choisie"/>
                <img src="img/buga-2.jpg" class="voiture-choisie"/>
            
        </div>
    
            <p class="date">Publié le <span class="publication-date">13 avril 2023</span></p>
    

   
            @include('footer')
            <script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
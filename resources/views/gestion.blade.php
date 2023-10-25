
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/gestion.css">
    <link href="img/dolphin.png" rel="shortcut icon">
    </head>

    <body>

    @include('header')

        

    <br><br>

    <h1> GESTION</h1>

    <br><br>
        <article class="container">

          <img class="containerimage1" src="img/redcar.JPG" alt="redcar">

          <h3> VOUS POSSEDEZ DEJA UN VEHICULE (<span style="color: #fd7e14;">VTC, TAXI</span>) MAIS VOUS AVEZ DU MAL A SUIVRE VOTRE INVESTISSEMENT OUR DIVERS MOTIFS ? <br>
            <br></h3>
          
          <p> <span style="font-weight: bold;"> AC TRANSPORT</span> met à votre disposition un Service de Suivi et de Gestion Efficace et de la bonne qualité qui 
            vous facilitera la vie.
          </p>


        </article>


        <br><br>
        <article class="container">

        


          <img class="containerimage2" src="img/graycar.JPG" alt="redcar">

          <h3> VOUS POSSEDEZ  <span style="color: #fd7e14;">UN VEHICULE EN BON ETAT</span> QUE VOUS N'UTILISEZ PAS  OU VOUS VOULEZ AVOIR UN REVENU 
            SUPPLEMENTAIRE GRACE A CE VEHICULE ?<br><br> </h3>
          <p>
            <span style="font-weight: bold;">AC TRANSPORT</span> vous offre l'opportunité d'y parvenir en faisant de votre véhicule un VTC avec une garantie de gestion
            et de suivi impéccable tout en vous rassurant d'un revenu net chaque fin du mois.
          </p>
         

        </article>


        <br><br>
        <article class="container">

          
  
  
            <img class="containerimage3" src="img/bluecar.JPG" alt="redcar">
  
            <h3> VOUS SOUHAITEZ RENTRER DANS LE <em style="color: #fd7e14;"> VTC </em>? <br><br></h3>
            <p>
              <span style="font-weight: bold;"> AC TRANSPORT </span>vous acccompagne dans le choix, l'achat, et la gestion de vos véhicules, nous vous offrons aussi
               l'opportunité  de faire l'achat localement avec nos partenaire et aussi vous accompagner dans l'importation 
               de vos véhicules.
            </p>
           
  
          </article>
          <br><br>
          <p class="basdepage">CONFIEZ NOUS VOS INVESTISSEMENT, NOUS VOUS ASSURONS 350.000F CFA MINIMUM / MOIS.</p><br><br>
    
          @include('footer')
       <script src="{{ asset('js/acceuil.js') }}"></script>
        </body>
</html>
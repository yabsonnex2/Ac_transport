
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>achatventelocation</title>
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/achatventelocation.css">
    <link href="img/dolphin.png" rel="shortcut icon">
    </head>

    <body>

    @include('header')
            

    <h1> ACHAT, VENTE, ET LOCATION</h1>

    <br><br>
    <!--partir achat-->
        <article class="container">

          

          <h2> ACHAT<br><br></h2>
          <h3>VOUS VOULEZ DEVENIR PROPRIETERE D'UN VEHICULE NEUF OU D'OCCASSIONS ?</h3><br>
          
          <p> <span style="font-weight: bold;"> AC TRANSPORT</span> vous facilite la tâche dans l'acquisition de votre vehicule.
            En important pour vous des vehicules neuf à 00 km ou des véhicules d'occassions de moins de 5 ans avec de flaibles kilométrages,
            aux prix les plus bas du marché.<br><br>
            Aux conditions suivantes<br><br>
           <span style=" font-weight: bold; margin-left: 200px;  background-color:#1a3c83; color: white; font-style: initial; padding: 10px;">50% A LA COMMANDE</span> 
            <span style=" font-weight: bold; background-color:#fd7e14; color: white; font-style: initial; padding: 10px;">50% A LA LIVRAISON</span>
          </p><br><br>

          <img class="containerimage1" src="img/key.JPG" alt="key">

          <p>Nous nous occupons:<br><br>
            
            du<span style="font-weight: bold;"> TRANSPORT</span><br>
            du <span style="font-weight: bold;">DEDOUANEMENT</span><br>
            de <span style="font-weight: bold;">L'IMMATRICULATION</span><br>
            Delais de livraison: <br><span style="font-weight: bold; color:#fd7e14 ;">45 jours</span>
          
            </p>

        </article>


          <br><br>
         
    <!--fin achat-->

         <!--partir vente-->
    <article class="container">

          
       
                  <h2> VENTE<br><br></h2>
                  
                  
                  <p> <span style="font-weight: bold;"> AC TRANSPORT</span> vous offre l'opportunité de prendre en charge<span> la vente
                     de votre véhicule</span> quelques soit la marques quelques soit le modèle en toute sécurité en vous rassurant <span> meilleur 
                     prix sur le marché</span>.<br><br>
                   
        
                  <img class="containerimage2" src="img/vente.jpg" alt="vente">
        
                  
        
                </article>
        
        
                  <br><br>
                 
            <!--fin vente-->

            <!--partir location-->
    <article class="container">

          
       
        <h2> LOCATION<br><br></h2>
        
        <h3>LOUEZ VOS VEHICULES</h3><br>
        <img class="containerimage3" src="img/whitecar.jpg" alt="voitureblanche">

          <p>
            <span> Vous passez des vacances<br>
             Vous organisez un mariage <br>
             Votre véhicule a fait une panne<br><br>
             Avez-vous bésoin d'une voiture pour une circonstance ?
            </span><br> alors contactez nous.
            
            </p><br><br>
            <h2>FAITES LOUER VOS VEHICULES</h2><br>

                <img class="containerimage4" src="img/yellowcar.jpg" alt="voiturejaune">
             <p>

                <span> Vous disposez d'une voiture que vous n'utilisez presque pas ? <br><br>
             Vous voulez investire dans la location de véhicule ?<br><br>
             
            </span><br> confiez-nous vos véhicules et nous le ferons louer pour vous.
          
            </p><br><br>

      </article>


        <br><br>
       
  <!--fin location-->
  @include('footer')
  <script src="{{ asset('js/acceuil.js') }}"></script>
        </body>
</html>
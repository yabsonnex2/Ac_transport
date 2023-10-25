<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>
    <link rel="stylesheet" href="css/devis.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link href="img/dolphin.png" rel="shortcut icon">
</head>
<body>
    @include('header')

    <div class="centre">
     <h3>Obtenez votre devis en quelques clics</h3>
     <p class="titre1">Vous souhaitez louer un véhicule mais ne navez pas une idée du coût ? Pas d’inquiétude, nous mettons à votre disposition un formulaire de demande de devis. </p>
     <div class="content-form">
         <div class="message" data-offset="100" data-constraint=".content-form"><p>Coût indicatif:<span class="cout"> 0 FCA</span> (le coût augmentera par en fonction du temps de location)<br><br> <span style="color:rgb(115 229 92) ;">NB</span><br><br><br><br><span class="alert-message"></span></p></div>
         <form action="devis2.html" class="form">
            <div class="indique">
                <p class="info">Les champs marqués d’un * sont obligatoires</p>
                <div class="limite-gris"></div>
              <div class="cases">
                <div class="id1"><i class="fa fa-exclamation-circle"></i> Identifiant du client</div>
               
              </div>
                <p class="txt">
                   Vous vous apprêtez à soumettre vos données personnelles (identité et vie professionnelle) via le formulaire ci-dessous pour le traitement de votre demande de devis. Vos données personnelles ne serviront que dans ce but et ne seront ni divulguées ni utilisées pour d'autres finalités. Ces données seront supprimées après une durée de douze (12) mois.
                </p>
            </div>

             <label for="n&p" class="lab1">Nom et prénoms *</label>
             <input type="text" placeholder="Nom et prénoms" class="ipt1 casess">

             <label for="tel" class="lab2">Téléphone *</label>
             <input type="text" placeholder="Téléphone" class="ipt2 casess">

             <label for="mail" class="lab3">Email *</label>
             <input type="email" placeholder="Adress email" class="ipt3 casess">
             
             <label for="mail" class="lab3">Adresse </label>
             <input type="text" placeholder="lieux de résidence" class="ipt3 casess">

             


            <div class="bouton-click">
                <div class="bouton-invisible" style="display: none;">
                    <input type="radio" id="rd1" class="rd11">
                    <input type="radio" id="rd2" class="rd11">
                </div>
                <label for="mail" class="lab3">Temps de location *</label>
                <select>
                   <nom>temps de location</nom>
                    <option>8 heurs</option>
                    <option>12 heurs</option>
                    <option>24 heurs</option>
                    <option>36 heurs</option>
                    <option>48 heurs</option>
                    <option>60 heurs</option>
                    <option>72 heurs</option>
                    <option>4 jours</option>
                    <option>5 jours</option>
                    <option>6 jours</option>
                    <option> 1 semaine</option>
            
                </select>
                
                <br><p style="color: red" id="erreur4"></p>
            </div>
            <label for="mail" class="lab3">Code véhicule  *</label>
          <input type="text" placeholder="Nom de l'entreprise" class="choixvehicule" required>

            <div class="affich">
                <label for="entreprise" class="lab7">Nom de l'entreprise</label>
                <input type="text" placeholder="Nom de l'entreprise" class="ipt4" id="entreprise">

            </div>

             <input type="submit" value="VALIDER" class="btn-envoie" required>
            
         </form>
     </div>
    </div>

    @include('footer')
            <script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
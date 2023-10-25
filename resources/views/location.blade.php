<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location</title>
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
   
</head>
<body>
@include('header')

    <!--debut centre-->
 <div class="centre">
        <div class="container">
            <p>Vous aviez fait un bon choix !!Veillez renseigner le formulaire <a href="rendezvous.html" style="color: rgb(31, 71, 146);text-decoration: none;">ci-dessous</a> a fin de prendre en compte votre demande de location</p>
            <form action="remercimentDevis.html" class="form" id="form">
                <label for="text">Nom et Prenom</label>
                <input type="text" id="text" class="cases">
                
                <label for="mail">Mail</label>
                <input type="email" id="mail" class="cases" placeholder="Ex:NomUtilistaeur@gmail.com">

                <label for="tel">tél</label>
                <input type="tel" id="tel" class="cases" placeholder="Ex:+225 01-01-01-01">

                <label for="domaine" class="essai" > chauffeur ?</label>
                <select class="choixessai">
                    <option>oui</option>
                    <option>non</option>
                </select>
                
                <label for="domaine" class="temps">Date de prise</label>
                <input type="date" id="domaine" class="cases">

                <label for="domaine" class="temps">Date de fin</label>
                <input type="date" id="domaine" class="cases">

                <label for="domaine" class="message">message</label>
                <input type="text" id="domaine" class="cases" placeholder="Ecrivez ici si vous aviez un message">

                <input type="submit" value="envoyer">

                
            </form>
        </div>
    </div>
     <!--debut centre-->


@include('footer')
<script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
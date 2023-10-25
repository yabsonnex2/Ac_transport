<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rendez-vous</title>
    <link rel="stylesheet" href="css/rendezvous.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link href="img/logoac1.png" rel="shortcut icon">
</head>
<body>
    @include('header')

    <div class="centre">
        <div class="container">
            <p>Vous aviez fait un bon choix !!Veillez renseigner le formulaire <a href="rendezvous.html" style="color: rgb(31, 71, 146);text-decoration: none;">ci-dessous</a> a fin de prendre au plus vite votre rendez-vous</p>
            <form action="remercimentDevis.html" class="form" id="form">
                <label for="text">Nom et Prenom</label>
                <input type="text" id="text" class="cases">
                
                <label for="mail">Mail</label>
                <input type="email" id="mail" class="cases" placeholder="Ex:NomUtilistaeur@gmail.com">

                <label for="tel">tél</label>
                <input type="tel" id="tel" class="cases" placeholder="Ex:+225 01-01-01-01">

                <label for="domaine" class="essai">Faire un essai ?</label>
                <select class="choixessai">
                    <option>oui</option>
                    <option>non</option>
                </select>
                
                <label for="domaine" class="temps">Date de rendez-vous</label>
                <input type="date" id="domaine" class="cases">

                <label for="domaine" class="temps">Heurs de rendez-vous</label>
                <input type="time" id="domaine" class="cases">

                <label for="domaine" class="message">message</label>
                <input type="text" id="domaine" class="cases" placeholder="Ecrivez ici si vous aviez un message">

                <input type="submit" value="envoyer">

                
            </form>
        </div>
    </div>


    @include('footer')
  <script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
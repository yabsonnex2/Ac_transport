<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link href="img/logoac1.png" rel="shortcut icon">
</head>
<body>
        @include('header')

        <div class="centre">
            <div class="bloque-gauche">

                <div class="contact">
                    <h3 style="color: green;">Contacté-nous</h3>
                    <div class="icone-contact">
                        <i class="fa fa-phone-square"></i><span class="reduit">+225 00 00 00 00 00 / +225 00 00 00 00 00</span>
                    </div>
                </div>

                <div class="reseaux">
                    <h3 style="color: green;">Suivez-nous</h3>
                    <div class="icone-reseaux">
                        <a href="#"><i class="fab fa-facebook-square"></i><span class="reduit">Facebook</span></a>
                        <a href="#"><i class="fab fa-whatsapp-square"></i><span class="reduit">Whatsapp</span></a>
                        <a href="#"><i class="fab fa-google-plus-square"></i><span class="reduit">Google plus</span></a>
                    
                    </div>
                </div>
                
            </div>

            <form action="remercimentDevis.html" class="form-bloque-droite">
                <h3 style="color: green;">ENVOYEZ-NOUS UN MESSAGE</h3>

                <div class="champs">
                    <input type="text"  id="nomETprenom" class="cases" placeholder="nom et prenom">
                    <input type="email" name="email" id="email" class="cases" placeholder="email">
                    <input type="tel" name="tel" id="tel" placeholder="Tèl" class="cases">
                    <textarea name="message" id="message" placeholder="Message" class="cases"></textarea>
                    <input type="submit" value="Envoyer" id="submit">
                </div>


            </form>
        </div>

        </div>



        @include('footer')
            <script src="{{ asset('js/acceuil.js') }}"></script>
</body>
</html>
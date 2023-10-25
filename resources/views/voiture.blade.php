<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AC-TRANSPORT</title>
        <link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/css@3.css')}}">
       
    
    </head>
    <body>
            @include('header')
            @include('article')
            @include('footer')
            <script src="{{ asset('js/acceuil.js') }}"></script>
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>

</html>
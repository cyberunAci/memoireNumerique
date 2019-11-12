<!doctype html>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
  </head>
  <body>
        <header id="header" role="banner" class="main-header">
                <div class="header-inner">
             
                    <div class="header-logo">
                        <img src="logo.png" alt="Logo" width="150" height="45">
                    </div>
             
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Our projects</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
             
                </div>
            </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/navbar.js')}}"></script> <!-- Attention chargement dans l'orde d'apparition / de Haut en Bas-->
</body>
</html>
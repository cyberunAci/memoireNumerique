<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29e6b87f45.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <header id="header" role="banner" class="main-header">
                <div class="header-inner">
             
                    <div class="header-logo">
                        <img src="logo.png" alt="Logo" width="150" height="45">
                    </div>
             
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Médiathèques</a></li>
                            <li><a href="#">Je participe</a></li>
                            <li class="logo-rechercher"><a href="#"></a></li>
                        </ul>
                    </nav>
             
                </div>
            </header>
    @yield('content')


    <div class="footer">
            <p class="center indent"><a href=""><i class="fab fa-facebook fa-lg"></i></a><a href=""><i class="fab fa-twitter fa-lg"></i></a></p>
        <hr>
        <h3 class="center">Les partenaires</h3>
      
        <div class="parent center">
          <div class="div1"><img src="https://via.placeholder.com/150" alt=""></div>
          <div class="div2"><img src="https://via.placeholder.com/150" alt=""></div>
          <div class="div3"><img src="https://via.placeholder.com/150" alt=""></div>
          <div class="div4"><img src="https://via.placeholder.com/150" alt=""></div>
          <div class="div5"><img src="https://via.placeholder.com/150" alt=""></div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
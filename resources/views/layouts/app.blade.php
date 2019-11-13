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

        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" width="60" height="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        L'équipe
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Lorem ipseum</a>
                        <a class="dropdown-item" href="#">Lorem ipseum</a>
                        <a class="dropdown-item" href="#">Lorem ipseum</a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Médiathèques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Je participe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" ><img src="img/loupe.png" alt="Logo" width="30" height="25"></a>
                    </li>
                  </ul>
                </div>
              </nav>

    @yield('content')


    <div class="footer">
            <p class="text-center pt-3"><a href=""><i class="fab fa-facebook fa-lg m-1"></i></a><a href=""><i class="fab fa-twitter fa-lg m-1"></i></a></p>
        <hr>
        <h3 class="text-center">Les partenaires</h3>
      
        <div class="row pb-2">
          <div class="col-lg-3 col-md-6 col-sm-12 "><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
        </div>

        <h3 class="text-center">Newsletter</h3>
        <form>
            <div class="form-group">
              <div class="row justify-content-center">
              <p class="text-center"><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></p>
              <p class="text-center pl-1"><input type="submit" class="btn btn-primary" value="S'inscrire"></p>
              </div>
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Logo" width="60" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end navbar-blanc" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Accueil</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administrateur
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/admin/dashboard">Dashboard</a>
              <a class="dropdown-item" href="/admin/description">Description</a>
              <a class="dropdown-item" href="/admin/equipe">Équipe</a>
            </div>
<<<<<<< HEAD
        </li>
=======
          </li>
>>>>>>> 22f39480500894d8d10173bcf6abba6df9fb5cf6
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/mediatheque">Médiathèques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/jeparticipe">Je participe</a>
        </li>
        <li class="nav-item desactiveRecherche" id="activeRecherche">

          <form action="/recherche" method="POST" id="formulaireRecherche">
            {{ csrf_field() }}
              <input id="barreRecherche" wrap="off" maxlength="30" name="recherche">
              <input type="image" id="btnRecherche" alt="Login" src="../img/loupe.png" width="30" height="25">
          </form>

        </li>
        <li class="nav-item" id="imgLoupe">
            <a class="nav-link" href="#" id="affichageRecherche"><img src="../img/loupe.png" alt="Logo" width="30" height="25"></a>
        </li>
      </ul>
    </div>
  </nav>

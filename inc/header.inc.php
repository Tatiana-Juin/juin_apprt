<!doctype html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="tatiana Juin">
    <meta name="description" content="Site pour la location ou vente d'appartement">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= RACINE_SITE."assets/css/style.css"?>">
    <title><?= $title ?></title>
</head>

<body>
<header>
    <!-- BARRE DE NAVIGATION -->
  <nav class="navbar navbar-expand-lg colorNavbar ">
      <div class="container-fluid">
        <!-- pour rediriger sur la page index.php - donc accueil -->
        <a class="navbar-brand fs-2" href="<?= RACINE_SITE."index.php" ?>">Annonce</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-center" id="navbarText">
          <!-- LIENS DE NAVIGATION DU SITE  -->
          <ul class="navbar-nav justify-content-lg-center ">
              <li class="nav-item">
                  <a class="nav-link fs-4" href="<?= RACINE_SITE."ajoutAnnonce.php"?>">Ajouter une annonce </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-4" aria-current="page" href="<?= RACINE_SITE."toutesAnnonces.php"?>">Consulter toutes les annonces</a>
                </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>
 
 
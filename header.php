<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?><!doctype html>
<html lang="fr" class="h-100">
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Application Geoworld">
    <title>Homepage : GeoWorld</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>


<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Geoworld</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php"  id="dropdown01" data-bs-toggle="dropdown" aria-haspopup="true" 
             aria-expanded="false" >Continent</a>
          <div  class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item"  href="index.php?continent=Africa">Pays d'Afrique </a>
            <a class="dropdown-item"  href="index.php?continent=Asia">Pays d'Asie</a>
            <a class="dropdown-item" href="index.php?continent=Europe">Pays d'Europe</a>
            <a class="dropdown-item" href="index.php?continent=North America">Pays de l'Amerique du nord</a>
            <a class="dropdown-item" href="index.php?continent=Oceania">Pays d'océanie</a>
            <a class="dropdown-item" href="index.php?continent=Antarctica">Pays de l'Antartique</a>
            <a class="dropdown-item" href="index.php?continent=South America">Pays de l'amérique du sud</a>
          </div>
        </li>
      

        <li class="nav-item">
          <a class="nav-link " href="todo-projet.php">
            Présentation-Atelier-de-Prof-SLAM
          </a>
          <li class="nav-item">
          <li class="nav-item">




          <?php
 require_once('fonctionsPdo.php');
 // On récupère la session
 session_start ();
 // On teste pour voir si nos variables de session ont bien été enregistrées
 if (isset($_SESSION['nom']) ) {
  echo '<a class="nav-link active"  aria-current="page" href="./logout.php">Deconnexion</a>';
 
 }
  else
  {
echo '<a class="nav-link active" aria-current="page" href = authentification.php >Connexion  </a> '; 
echo  '<li class="nav-item">
<a class="nav-link active" aria-current="page"  href = inscription.php >Inscription</a>
</li>';
  }
?>
 
 
 <?php if($_SESSION['role']=='admin'): ?>
  
   <li class="nav-item">
<a class="nav-link active" aria-current="page"  href = listeSalariespdo.php >Gestion des utilisateurs</a>
</li>;


  <?php endif; ?>





      </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>

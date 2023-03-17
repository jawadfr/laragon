<?php
 require_once('fonctionspdo.php');
 // on teste si nos variables sont définies et remplies
 if (isset($_POST['login']) && isset($_POST['pwd']) && !empty($_POST['login'])&& !
empty($_POST['login'])) {
 // on appele la fonction getAuthentification en lui passant en paramètre le login et password
 //la fonction retourne les caractéristiques du salaries si il est connu sinon elle retourne false
 $result = getAuthentification($_POST['login'],$_POST['pwd']);
 print_r($result);
 // si le résulat n'est pas false
 if($result){
// on la démarre la session
session_start ();
// on enregistre les paramètres de notre visiteur comme variables de session
$_SESSION['nom'] = $result->nom;
$_SESSION['id'] = $result->idsalaries;
$_SESSION['role'] = $result->role;
// on redirige notre visiteur vers une page de notre section membre
header ('location: todo-projet.php');

 }
 //si le résultat est false on redirige vers la page d'authentification
 else{
 header ('location: authentification.php');
 }
 }

 //si nos variables ne sont pas renseignées on redirige vers la page d'authentification
 else {
 header ('location: authentification.php');
 }
 ?> 
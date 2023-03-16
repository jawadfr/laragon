<?php
session_start();
require_once('connectionPdo.php');
//on récupère et on vérifie les données reçues par le formulaire
if ( isset($_SESSION['id']) && !empty($_SESSION['id'])){
$id = $_SESSION['id'];

echo $id;
}



// à faire sur chaque donnée reçue

$Name = $_POST['Name'];
$Population = $_POST['Population'];
$Capitale = $_POST['Capital'];
// on rédige la requête SQL
$sql = "update country set
Name= :Name,Population= :Population,Capital= :Capitale
where id= :id";
try {
//on prépare la requête avec les données reçues
$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->bindParam(':Name', $Name , PDO::PARAM_STR);
$statement->bindParam(':Population', $Population, PDO::PARAM_STR);
$statement->bindParam(':Capitale', $Capitale, PDO::PARAM_STR);
$statement->execute();
//On renvoie vers la liste des salaries
 header("Location:todo-projet.php");
}
catch(PDOException $e){
 echo 'Erreur : '.$e->getMessage();
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
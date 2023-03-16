<?php
require_once('connectionPdo.php');
//on récupère et on vérifie les données reçues par le formulaire
if ( isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'] ;
}
echo $id;
// à faire sur chaque donnée reçue
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$naissance = $_GET['naissance'];

$role = $_GET['role'];

// on rédige la requête SQL
$sql = "update salaries set
nom= :nom,prenom= :prenom,date_naissance= :naissance,role= :role
where idsalaries= :id";
try {
//on prépare la requête avec les données reçues
$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->bindParam(':naissance', $naissance, PDO::PARAM_STR);
$statement->bindParam(':role', $role, PDO::PARAM_STR);
$statement->execute();
//On renvoie vers la liste des salaries
 header("Location:listeSalariesPdo.php");
}
catch(PDOException $e){
 echo 'Erreur : '.$e->getMessage();
}
?>
<?php
require_once('connectionpdo.php');
//on récupère et on vérifie que l'id figure dans l'URL
if ( isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'] ;
}
$query = "delete from salaries where idsalaries = :id ;";
try {
 $prep = $pdo->prepare($query);
 $prep->bindParam(':id', $id, PDO::PARAM_INT);
 $prep->execute();
 //On redirige vers la liste des salaries
 header("Location:listeSalariesPdo.php");
}
catch ( Exception $e ) {
 die ("erreur dans la requete ".$e->getMessage());
}
?> 
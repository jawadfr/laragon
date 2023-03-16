<?php
$host='localhost';
$bd='geoworld';
$login='root';
$password='';
try
{
$pdo = new PDO('mysql:host='.$host.';dbname='.$bd, $login, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e) //Le catch est chargé d’intercepter une éventuelle erreur
{
die ($e->getMessage());
}

global $pdo;

$nom = $_POST["Nom"]; 
$prenom = $_POST["prenom"]; 
$date = $_POST["date_de_naissance"];
$date2 = $_POST["Login"];
$salaire = $_POST["password"];
$role= $_POST["role"];


$sql ="INSERT INTO salaries(nom, prenom, date_naissance, Login, password, role) VALUES ('$nom','$prenom', '$date', '$date2', '$salaire' , '$role');";
try {
    //on prépare la requête avec les données reçues
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $statement->bindParam(':date_naissance', $date, PDO::PARAM_STR);
    $statement->bindParam(':login', $date2, PDO::PARAM_STR);
    $statement->bindParam(':password', $salaire, PDO::PARAM_STR);
    $statement->bindParam(':role', $role, PDO::PARAM_STR);
    $statement->execute();
    //On renvoie vers la liste des salaries
     header("Location:index.php");
    }
    catch(PDOException $e){
     echo 'Erreur : '.$e->getMessage();
    }
    
    ?>

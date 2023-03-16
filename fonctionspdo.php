<?php

require_once('connectionpdo.php') ;


   function getAuthentification($login,$pass){
    global $pdo;
    $query = "SELECT * FROM salaries where login=:login and password=:pass";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pass', $pass);
    $prep->execute();
    // on vérifie que la requête ne retourne qu'une seule ligne
    if($prep->rowCount() == 1){
    $result = $prep->fetch();
    return $result;
    }
    else
     return false;
}


function getAllSalaries(){
   global $pdo;
   $query = 'SELECT * FROM salaries ';
   try {
   $result = $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
   return $result;
   }
   catch ( Exception $e ) {
   die ("erreur dans la requete ".$e->getMessage());
   }
  }
  
  function getSalarie($id){
      global $pdo;
      $requete = "SELECT * FROM salaries where idsalaries = :id";
      try{
      $prep = $pdo->prepare($requete);
      $prep->bindParam(':id', $id, PDO::PARAM_INT);
      $prep->execute();
      $result = $prep->fetch();
      return $result;
      }
      catch ( Exception $e ) {
      die ("erreur dans la requete ".$e->getMessage());
      }
     }


     function getcolone($id){
        global $pdo;
        $requete = "SELECT * FROM country where id = :id";
        try{
        $prep = $pdo->prepare($requete);
        $prep->bindParam(':id', $id, PDO::PARAM_INT);
        $prep->execute();
        $result = $prep->fetch();
        return $result;
        }
        catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
        }
       }












 ?>



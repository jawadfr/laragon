


<?php
 require_once('fonctionsPdo.php');
 // On récupère la session
 session_start ();
 // On teste pour voir si nos variables de session ont bien été enregistrées
 if (isset($_SESSION['nom']) && isset($_SESSION['role'])) {
 echo "<p >Bienvenue : ".$_SESSION['nom']."(".$_SESSION['role'].")";


 }
 else
 header ('location: authentification.php');
?>


<?php if($_SESSION['role']=='user'): ?>
  
  <td> <a href="update.php?id=<?php echo $_SESSION['id'] ?>" >update</a> </td>
  <?php endif; ?>
   </tr>


<?php


 require_once('fonctionspdo.php');
 
 $listeSalaries = getAllSalaries();

 

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8" />
  <link href="css/tableauxx.css" rel="stylesheet">
</head>

       
  <a href="inscription.php">Ajouter un utilisateur</a>
  <a href="todo-projet.php">Retour à l'accueil</a>
   
<table class="table-style">

  <thead>
  <tr>


  <th>Login</th>
  <td>Mot de passe</td>
  <td>Date de Naissance</td>
  <td>Role</td>
  <?php if($_SESSION['role']=='admin'): ?>
  <td>Supprimer</a> </td>
<td>Modifier</a> </td>
<?php endif; ?>

</tr>
</thead>

        <tbody>
            <tr>
 <?php 
 
 foreach ($listeSalaries as $leSalarie ) :
 
 ?>


<td><?php echo $leSalarie->nom; ?></td>
<td><?php echo $leSalarie->prenom; ?></td>
<td><?php echo $leSalarie->date_naissance; ?></td>
<td><?php echo $leSalarie->role; ?></td>

<?php if($_SESSION['role']=='admin'): ?>
  <td> <a href="delete.php?id=<?php echo $leSalarie->idsalaries ?>" >Supprimer</a> </td>
<td> <a href="update.php?id=<?php echo $leSalarie->idsalaries ?>" >Modifier</a> </td>
<?php endif; ?>


 </tr>

 <?php
 endforeach;
 
  ?>
</table>
<p>
   </p>
   </table>


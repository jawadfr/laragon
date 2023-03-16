<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8" />
  <link href="css/tableaux.css" rel="stylesheet">
</head>

<?php
 
?>

<a href = inscription.php> Ajoutez un utilisateurs</a>
<a href = todo-projet.php> Retour à l'acceuil</a>





<?php
 require_once('fonctionsPdo.php');
 // On récupère la session
 session_start ();
 // On teste pour voir si nos variables de session ont bien été enregistrées
 if (isset($_SESSION['nom']) && isset($_SESSION['role'])) {
 echo "<p style=text-align:right;>Bienvenue : ".$_SESSION['nom']."(".$_SESSION['role'].")";
 echo '<br><a href="./logout.php">Deconnexion</a></p>';
 
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



<table>
<tr>

  <td>Login</td>
  <td>Mot de passe</td>
  <td>Date de Naissance</td>
  <td>Role</td>
  <?php if($_SESSION['role']=='admin'): ?>
  <td> delete</a> </td>
<td> update</a> </td>
<?php endif; ?>



</tr>

 <?php 
 
 foreach ($listeSalaries as $leSalarie ) :
 
 ?>
 <tr>

<td><?php echo $leSalarie->nom; ?></td>
<td><?php echo $leSalarie->prenom; ?></td>
<td><?php echo $leSalarie->date_naissance; ?></td>
<td><?php echo $leSalarie->role; ?></td>

<?php if($_SESSION['role']=='admin'): ?>
  <td> <a href="delete.php?id=<?php echo $leSalarie->idsalaries ?>" >delete</a> </td>
<td> <a href="update.php?id=<?php echo $leSalarie->idsalaries ?>" >update</a> </td>
<?php endif; ?>


 </tr>

 <?php
 endforeach;
  ?>

</table>
<p>
   </p>
   </table>
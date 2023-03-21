<?php
 require("fonctionspdo.php");

 //on récupère et on vérifie que l'id figure dans l'URL
 
if ( isset($_GET['id']) && !empty($_GET['id'])){
 $id = $_GET['id'] ;
 $salarie = getSalarie($id);
}
?>
<link rel="stylesheet" href="css/formulaire.css" />


<form action="updateSalaries.php" method="GET" >


</head>
<body>

<div class="container">


<div class="form-group">

Nom :
<input type="text" name="nom" required value="<?php echo $salarie->nom; ?>" /> <br />
Prénom :
<input type="text" name="prenom" required value="<?php echo $salarie->prenom; ?>" /> <br />

Date de naissance :
<input type="date" name="naissance" value="<?php echo $salarie->date_naissance; ?>"/> <br />

Statut :
<select name="role">
 <option value="Eleve">Eleve</option>
 <option value="Enseignant">Enseignant</option>
  </select>
<input type="hidden" name="id" value="<?php echo $salarie->idsalaries ?> ">
<br />

<input type="submit" value="mettre à jour" />
<input typ
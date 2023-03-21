<?php
session_start();
require("fonctionspdo.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $salarie = getcolone($id);
  $_SESSION['id'] = $_GET['id'] ;

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>

<form action="modifiéutilisateur.php" method="POST">
<link rel="stylesheet" href="css/formulaire.css" />


</head>
<body>

<div class="container">


<div class="form-group">
    
   Pays :
    <input type="text" name="Name" required value="<?php echo $salarie->Name; ?>" /> <br />
    </div>
    <div class="form-group">
   Population:
    <input type="text" name="Population" required value="<?php echo $salarie->Population; ?>" /> <br />
    </div>
    <div class="form-group">
    Capitale:
    <input type="text" name="Capital" value="<?php echo $salarie->Capital; ?>" /> <br />
    </div>
    <div class="button">
      <input type="submit" value="Mettre à jour" />
      <br />


</div>
</div>
</form>
</div>
</body>
</html>

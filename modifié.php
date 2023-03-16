<?php
require("fonctionspdo.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $salarie = getcolone($id);
}

?>

<form action="modifiéutilisateur.php" method="POST">
  <fieldset>
    <legend><i>Salariés</i></legend>
   Pays :
    <input type="text" name="Name" required value="<?php echo $salarie->Name; ?>" /> <br />
   Population:
    <input type="text" name="Population" required value="<?php echo $salarie->Population; ?>" /> <br />

   Capitale:
    <input type="text" name="Capital" value="<?php echo $salarie->Capital; ?>" /> <br />
 
      <input type="submit" value="Mettre à jour" />
      <input type="reset" value="Annuler" />
    </fieldset>
  </fieldset>
</form>

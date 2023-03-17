<?php


/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';

$continent = $_GET["continent"];
$desPays = getCountriesByContinent($continent);

?>


<main role="main" class="flex-shrink-0">
  <div cla  ss="container">
    <h1 onclick="info(this)">Les pays en  <?php echo $continent?> </h1>
             
            </h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Population</th>
         <th>Capitale</th>

         <?php
 require_once('fonctionsPdo.php');
 // On récupère la session
 
 // On teste pour voir si nos variables de session ont bien été enregistrées
 if (isset($_SESSION['nom']) && isset($_SESSION['Enseignant'])) {
 echo "<p style=text-align:right;>Bienvenue : ".$_SESSION['nom']."(".$_SESSION['role'].")";

 
 }

?>



         <?php if($_SESSION['role']=='Enseignant'): ?>
         <th>Modifier</th>
         <?php endif; ?>


         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
         
        $pays = $desPays[0]; ?>
        <?php foreach ($desPays as $lepays ): ?>
          <tr>
            <td> <?php echo $lepays->Name ?></td>
            <td> <?php echo $lepays->Population ?></td>
            <td> <?php echo getNameCapitale($lepays->Capital) ?> </td> 
         

            <?php if($_SESSION['role']=='Enseignant'): ?>
  <td><a href="modifié.php?id=<?php echo $lepays->id; ?>"><img src="images/modifié.png" alt="Modifier"></a> </td>  </a> </td>
  
<?php endif; ?>
           
          </tr>
          <?php endforeach; ?>
     </table>
    </div>
    <p>
        <code>
     
        </code>
    </p>
    <section class="jumbotron">
      <div class="container">
        <h1 class="jumbotron-heading" onclick="info(this)">Tableau d'objets</h1>
        <p>Le contenu ci-dessus représente une vue "debug" du premier élément d'un tableau. Ce tableau est
          constitué d'objets PHP "standard" (stdClass).</p>
        <p>Pour accéder à l'<b>attribut</b> d'un <b>objet</b> on utilisera le symbole <b><code>-></code></b>.
          Ainsi, pour accéder à l'attribut <code>Name</code> du premier pays de la liste
          <code>$desPays</code> on fera <b><code>$desPays[0]->Name</code></b>
        </p>
        <p>La variable <b><code>$desPays</code></b> référence un tableau (<i>array</i>).
          Pour générer le code HTML (table), vous devrez coder une boucle,
          par exemple de type <b><code>foreach</code></b> sur l'ensembles des objets de ce tableau. </p>
        <p>Référez-vous à la structure des tables SQL pour connaître le nom des <b><code>attributs</code></b>.
          En effet, les objets du tableau ont pour attributs les noms des colonnes de la table interrogée par un requête SQL, via l'appel à la
          fonction <b><code>getCountriesByContinent</code></b> (du script <b><code>manager-db.php</code></b>.</p>
        <p>Par exemple <b><code>Name</code></b> est une des colonnes de la table <b><code>Country</code></b> de la base de données.</p>
          <p> Bonne programmation</p>
          <div class="alert alert-warning" role="alert">
            Cette section ne s'auto-détruit pas automatiquement, ce sera à vous de le faire, une fois compris son message !
          </div>
      </div>
    </section>
  </div>
</main>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>

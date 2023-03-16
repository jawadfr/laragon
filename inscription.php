<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/formulaire.css" />
</head>

<p>

    

  <div class="contact-form">
							<form id="contactForm"  action="insert.php" method="POST">
								
								<div class="c100">
									<label for="Nom">Nom: </label>
									<input type="text" id="Nom" name="Nom" required>
								</div>
							
					
								<div class="c100">
									<label for="prenom">Prenom : </label>
									<input type="text" id="prenom" name="prenom" required>
								</div>


						

<label for="start">Date de naissance:</label>
<input type="date" id="date_de_naissance" name="date de naissance"
value="2000-01-01"
       min="1918-01-01" max="2025-12-31">
	   <div class="c100">
									<label for="Login">Login : </label>
									<input type="text" id="Login" name="Login" required>
								</div>
								
								<div class="c100">
									<label for="password">Mot de passe : </label>
									<input type="password" id="password" name="password" required>
								</div>
								



								<label for="statut">Statut :</label>
<select name="role" id="role">
  <option value="etudiant">Étudiant</option>
  <option value="eleve">Élève</option>
</select>

<br>

<div class="c100">
								
								
            

			
								<div class="c100" id="submit">
									<input type="submit" value="Envoyer">
                  
								</div>



   </p>


   
   </table>
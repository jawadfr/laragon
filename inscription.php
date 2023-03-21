<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/Style.css" />
</head>

<p>

<div class="container">
							<form id="contactForm"  action="todo'projet.php" method="POST">
								
							<div class="form-group">
									<label for="Nom">Nom: </label>
									<input type="text" id="Nom" name="Nom" required>
								</div>
							
					
								<div class="form-group">
									<label for="prenom">Prenom : </label>
									<input type="text" id="prenom" name="prenom" required>
								</div>


	<div class="form-group">					

<label for="start">Date de naissance:</label>
<input type="date" id="date_de_naissance" name="date de naissance"
value="2000-01-01"
       min="1918-01-01" max="2025-12-31">
	   </div>
	   <div class="form-group">
									<label for="Login">Login : </label>
									<input type="text" id="Login" name="Login" required>
								</div>
								
								<div class="form-group">
									<label for="password">Mot de passe : </label>
									<input type="password" id="password" name="password" required>
								</div>
								
								<div class="form-group">							
<label for="statut">Statut :</label>
<select name="role" id="role">
  <option value="etudiant">Étudiant</option>
  <option value="Enseignant">Enseignant</option>
</select>

<div class="button">
                <input type="button" value=" S'inscrire">
				</div>
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html> 
<html>    
<head>        
<meta charset="utf-8" />        
<title>MON CV</title>    
	<link rel="stylesheet" type="text/css" href="css cv js.css">
	<php src='index.php'></php>
	
</head>    
<body id="b_ody"> 
<header id="titre_header">MON CV DE STAGE</header>
<nav id="ma_nav"> Sommaire : </nav>

<ul class="first">
	<li><a id ="nav_mon_cv" href="#"> Mon CV</a></li>
	<li><a id ="nav_mon_site" href="rest.php?drone">Drone</a></li>
	<li><a id ="nav_inscription" href="#">Inscription</a></li>
	<li><a id ="nav_connexion" href="#">Connexion</a></li>
</ul>
	
<section>
			<?php	

					session_start();

					if (isset($_GET['drone'])){

						$nbdrone=$_SESSION["nbdrone"];

								echo "<div class='statistique'><a href='rest.php?drone&nbdrone'>";
								echo "<p class='statistique_icone'><img src='drone.png'></p>";
								echo "<p class='statistique_valeur'>$nbdrone</p></a></div>";
					}
				?>
</section>
<div id="mon_cv">
<center> <p style="color:white"> • Données personnels  • Scolarité • Experience professionnelles • </p> 

			<br>
		<hr width="40%">
			<br>

			 
			
<U> <h1>A mon sujet </u> </h1> 

	<p style="color:white"> Nom & Prénom : Obela Joël Yvon
	<br>Adresse postale : 94380
	<br>Téléphone : 0615982472
	<br>Adresse mail: joelobela94@gmail.com </p>
		<hr width="40%">
 
  <img id="photo_identite" src="maphoto.jpg"> 
	
	<div id="lecteur_video">
			<video id="video">
				<source src="movie.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
		</video>
		<input type="image" id="fr" class="input_control" src="fr2.png">
		<input type="image" id="en" class="input_control" src="en.png">
		<input type="image" id="playpause" class="input_control" src="playpng.png">
		<input type="image" id="stop" class="input_control" src="arrêter.png">
		
		
	</div>
 
 <I> <h2> <u> Scolaritée </u> </I> </h2>
			
 <table class="t1">
 
  <tr>
    <th>Années</th>
    <th>Diplômes</th>
    <th>Etablissements</th>
  </tr>
  <tr>
	<td> 2020-2021 <br>2019-2020 <br>2016-2017 </td>
    <td>BTS SNIR 1ère année <br> BAC Scientifique <br> Brevet des collèges</td>
    <td> Lycée Louis Armand Nogent-Sur-Marne <br> Lycée Johannes Gutenberg Créteil <br> Collège Paul Eluard Bonneuil-Sur-Marne</td>
  </tr>
	
</table>
			<br>
			
	<div class="shadowbox">
	<ol>LANGUES</ol>
		<li>Français</li>
		<li>Anglais</li>
		<li>Espagnol</li>
	</div>
				<br>
		<hr width="40%">
			
<h3> <u> Compétences </u> </h3>

<table class="t2">
  <tbody><tr>
    <th>Langage</th>
    <th>Durée de la formation</th>
    <th>Compétences acquises</th>
  </tr>
  <tr>
    <td> HTML <br> CSS <br> GIT </td>
    <td> 1 an <br>  an <br> </td>
    <td> <ul>
			<li>Fondamentaux des balises</li>
			<li> Fichier HTML et sa structure</li>
			<li> Fichier CSS et sa structure </li>
			<li> Les sélecteurs (CSS) </li>
			<li> Les boîtes (CSS) </li>
			<li> Le dépôt local et distant (GIT) </li>
			</ul></td>
  </tr>

	</tbody></table>
<br>
		<hr width="40%">
 <br>
 <h4> <i> <u> Experience Professionelles </u> </i> </h4>
 
 <table class="t3">
  <tr>
    <th>Stage</th>
	<th>Durée</th>
  </tr>
  <tr>
    <td> Stage communication 3ème </td>
	<td> 1 semaine </td>
  </tr>
	</table>
	
			<br>
			
			<div class="shadowbox">
	<ul>LOISIRS</ul>
		<li>Basketball</li>
		<li>Manga/Animé</li>
		<li>Jeux vidéo</li></div>
</div>
			
			<div id="inscription">
				<h1> Formulaire d'inscription</h1>
					<form action="rest.php" method="post">
						<label for="Nom" style="color:white"> Nom: </label>
						<input type="text" id="Nom" name="nom_utilisateur"><br><br>
						
						<label for="Prénom" style="color:white"> Prénom: </label>
						<input type="text" id="Prénom" name="prenom_utilisateur"><br><br>
						
						<label for="mdp" style="color:white"> Mdp: </label>
						<input type="password" id="mdp" name="mdp_utilisateur"><br><br>
						
						<label for="mail" style="color:white"> email: </label>
						<input type="email" id="mail" name="mail_utilisateur"><br><br>
						
						<label for="Pseudo" style="color:white"> Pseudo: </label>
						<input type="text" id="Pseudo" name="pseudo_utilisateur"><br><br>
						
						<label for="Date" style="color:white"> Date de naissance: </label>
						<input type="date" id="date" name="date_utilisateur"><br><br>
						
						<input type="submit" id="bouton_inscription" name="inscription" value="S'inscrire">
					</form>
			</div>
			
			<div id="connexion">
				<h1> Formulaire de connexion</h1>
					<form action="rest.php" method="post">
					<label for="pseudo" style="color:white"> Pseudo: </label>
					<input type="text" id="pseudo" name="pseudo_utilisateur"><br><br>
					<label for="mdp" style="color:white"> Mot de passe: </label>
					<input type="password" id="mdp2" name="mdp_utilisateur"><br><br>
					<button type="submit" id="bouton" name="validForm">Se connecter</button>
					</form>
			</div>	
						
			</div>

 <footer id="p_footer"> 
<div class="theme_couleur_bleu" id="theme_blue"></div>
<div class="theme_couleur_orange" id="theme_orange"></div>

</footer>
<script src="mesfonctions.js"></script>
<script src="video.js"></script>

</center>
</body>
</html> 
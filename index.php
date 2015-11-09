<!DOCTYPE html>
<html>

	<head>
		<title>Formulaire</title>
		<link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
		<script type="text/javascript" src="saisie.js"></script>
		<FONT face="sans-serif" color=black size=4>
	</head>
	<script></script>
	<meta charset="utf-8">
	<body>
  <form method="post" action="saisie.php">

   <fieldset>
       <legend>Merci d'indiquer vos coordonnées ci-dessous</legend>
			 <label for="nom">Nom :</label><br />
       <input type="text" name="nom" id="nom" /><br />

       <label for="prenom">Prenom :</label><br />
       <input type="text" name="prenom" id="prenom" /><br />

       <label for="photo">Photo (url) :</label><br />
       <input type="text" name="photo" id="photo" /><br />

			 <label for="mail">Mail :</label><br />
       <input type="email" name="mail" id="mail" /><br />

			 <label for="cv">C.V. (url) :</label><br />
			 <input type="text" name="cv" id="cv" /><br />

			 <label for="tel">Téléphone :</label><br />
       <input type="tel" name="tel" id="tel" /><br />

			 <label for="date">Date de naissance (AAAAMMJJ) </label><br />
       <input type="date" name="date" id="date" /><br />

			 <label for="reseau">Réseaux sociaux :</label><br />
       <input type="text" name="reseaux" id="reseaux" /><br />



			 </p>
			 <p><input type="submit" value=" Envoyer" /></p>
   </fieldset>
  </body>
	</html>

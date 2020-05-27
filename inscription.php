<!DOCTYPE>
<html>
	<head>
       <meta charset="UTF-8">
       <b> INSCRIPTION </b>
	<p> Veuillez remplir les informations nécessaires à l'inscription </p>
    </head>


	<body>
		<form action="" method="POST">

			Nom : <input type="text" name="nom"><br>
			Prénom : <input type="text" name="prenom"><br>
			Numéro de téléphone : <input type="number" name="tel"><br>
            Adresse mail: <input type="text" name="mail"><br>
            Nombre de personnes : <input type="password" name="foyer"><br>
            Mot de passe : <input type="password" name="mdp"><br>
            Confirmation du mot de passe : <input type="password" name="mdp"><br>


			<input type="submit" value= "Valider l'inscription">
		</form>
	</body>
</html>

<?php
if (isset ($_POST["mail"]) && isset ($_POST["mdp"])) {
	try {
		$dsn = 'mysql:dbname=masque_COVID19;host=127.0.0.1:33';

		$dbh = new PDO($dsn, 'root', '');
	} catch (PDOException $e){
		echo 'connexion échouée : '.$e->getMessage();
	}

	$sql = 'SELECT mail, mdp from habitants WHERE mail = :mail and mdp = :mdp';
	$sth = $dbh->prepare($sql);
	$sth->execute(array(":mail" => $_POST["mail"], ":mdp" => $_POST["mdp"]));
	$res = $sth->fetch();

	if ($res) {
		echo $res['mail']." existe déjà !<br>";
	} else {
		$sql = 'INSERT INTO habitants (mail, mdp) values (:mail ,:mdp)';
		$sth = $dbh->prepare($sql);
		$sth->execute(array(":mail" => $_POST["mail"], ":mdp" => $_POST["mdp"]));
		echo "inscription réussi";
	}
}
?>

<?php
    session_start();
    $_SESSION['commande'] = [];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Passez Commande</title>
	</head>
	<body>
        <center>
            Commandez vos masques ici :
            <fieldset style="width: 210px;" >
        	    <form action="resucomm.php" method="POST" >
                    Nom : <input type="text" name="nom" required> Prénom : <input type="text" name="prenom" required><br>
                    Adresse :<input type="text" name="adr" required><br>
                    N° de téléphone : <input type="tel" name="tel" required><br>
                    Adresse E-mail : <input type="email" name="mail" required><br>
                    Nombre de masques souhaités : <input type="number" name="nbmasques" required><br>
                    Mot de passe : <input type="password" name="mdp" required><br>
                    <input type="submit" name="Passer la Commande"><br>
                </form>
            </fieldset>
        </center>
    </body>
</html>
<?php

?>

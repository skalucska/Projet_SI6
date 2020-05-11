<?php
    session_start();
    if(isset($_POST)){
        $_SESSION['commande']['nom'] = $_POST['nom'];
        $_SESSION['commande']['prenom'] = $_POST['prenom'];
        $_SESSION['commande']['adr'] = $_POST['adr'];
        $_SESSION['commande']['tel'] = $_POST['tel'];
        $_SESSION['commande']['mail'] = $_POST['mail'];
        $_SESSION['commande']['nbmasques'] = $_POST['nbmasques'];
        $_SESSION['commande']['mdp'] = $_POST['mdp'];
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Résumé de votre commande</title>
	</head>
	<body>
        <center>
            <fieldset style="width : 600px;" >
                <?php
                    echo "Commande passée par madame ou monsieur : ".$_SESSION['commande']['nom']." ".$_SESSION['commande']['prenom']."<br>";
                    echo "Habitant au ".$_SESSION['commande']['adr']."<br>";
                    echo "Vous avez passé commande de ".$_SESSION['commande']['nbmasques']." masques."."<br>";
                    echo "Nous pouvons vous contacter au : ".$_SESSION['commande']['tel']." et a l'adresse e-mail : ".$_SESSION['commande']['mail']."<br>";
                ?>
            </fieldset>
        </center>
    </body>
</html>

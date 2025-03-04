<!DOCTYPE>
      <html>
        <head>
          <meta charset='utf-8'>
          <title>form</title>
          <style>
          form {
            margin: 0 auto;
            width: 400px;
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
          }

          form div + div {
            margin-top: 1em;
          }

          label {
            display: inline-block;
            width: 90px;
            text-align: right;
          }

          input {
            font: 1em sans-serif;
            width: 300px;
            box-sizing: border-box;
            border: 1px solid #999;
          }

          input:focus {
            border-color: #000;
          }

          .button {
            padding-left: 90px;
          }

          button {
            margin-left: .5em;
          }
          </style>
        </head>
        <body>
        <form action='commande.php' method='POST'>
          <div>
            <label for='name'>mail :</label>
            <input type='text' id='name' name='mail'>
          </div>
          <div>
            <label for='password'>Mots de passe :</label>
            <input type='password' id='mdp' name='mdp'>
          </div>
          <div>
            <input type='submit' id='button' name='Inscription'>
          </div>
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
          header('Location:commande.php');
        } else {
          echo "vous n'êtes pas inscrit.";
        }
      }


      ?>

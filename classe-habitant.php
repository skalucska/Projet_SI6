<?php
require "bdd.php";
$bdd = new Bdd();

class Habitant{
    private $habitant;

    public function getPrenom(){
        return $this->$bdd->getBddPrenom($habitant);
    }

    public function getNom(){
        return $this->$bdd->getBddNom($habitant);
    }

    public function getAdresse(){
        return $this->$bdd->getBddAdresse($habitant);
    }

    public function getTel(){
        return $this->$bdd->getBddTel($habitant);
    }

    public function getMail(){
        return $this->$bdd->getBddMail($habitant);
    }

    public function getDerniereCommande(){
        return $this->$bdd->getBddDerniereCommande($habitant);
    }

    function __construct($id){
        $this->habitant = $id;
    }

}
?>
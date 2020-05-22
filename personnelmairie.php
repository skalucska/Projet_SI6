<?php
require "bdd.php";
$bdd = new Bdd();

class Personnelmairie
{
 private $personnel;
	public function getDemandeattente(){ //Liste des demandes en attente
      return $this->$bdd ->getBddDemandeattente($personnel);
    }

    public function getProchainsrdv(){ //Liste des prochains rdv
      return $this->$bdd ->getBddProchainrdv($personnel);
    }

    public function getChoixdemande(){ //Choisir si le personnel accepte ou non la demande
      return $this->$bdd ->getBddChoixdemande($personnel);
    }

    public function getPropositionrdv(){ //Si propositon acceptée, proposition de rdv
       return $this->$bdd ->getBddPropositionrdv($personnel);
    }

	}
}
?>
<?php
require_once('abstract_db.php');
class Patisserie_db extends  Abstract_db
{
  public function getAllPatisserie()
  {
    // Enregistrement de la requete
    $stmt = $this->conn->prepare("SELECT *
      FROM Patisserie");
      //Exécution de la requete
      $stmt->execute();
      //Récupération du résultat dans la variable resultat
      $resultat = $stmt->get_result();
      //Fermeture de la connection avec la base de données MySql
      $stmt->close();
      //Retour de la variable resultat
      return $resultat;
    }

    public function getCategorie()
    {
      // Enregistrement de la requete
      $stmt = $this->conn->prepare("SELECT *
        FROM Categorie");
        //Exécution de la requete
        $stmt->execute();
        //Récupération du résultat dans la variable resultat
        $resultat = $stmt->get_result();
        //Fermeture de la connection avec la base de données MySql
        $stmt->close();
        //Retour de la variable resultat
        return $resultat;
      }


  }
  ?>

<?php
require_once('abstract_db.php');
class Epicerie_db extends  Abstract_db
{
  public function getAllArticle()
  {
    // Enregistrement de la requete
    $stmt = $this->conn->prepare("SELECT *
      FROM article");
      //Exécution de la requete
      $stmt->execute();
      //Récupération du résultat dans la variable resultat
      $resultat = $stmt->get_result();
      //Fermeture de la connection avec la base de données MySql
      $stmt->close();
      //Retour de la variable resultat
      return $resultat;
    }

    public function getGamme()
    {
      // Enregistrement de la requete
      $stmt = $this->conn->prepare("SELECT *
        FROM Gamme");
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

<?php
require_once('abstract_db.php');
class Restaurant_db extends  Abstract_db
{

  public function getAllElementCarte()
  {
    // Enregistrement de la requete
    $stmt = $this->conn->prepare("SELECT *
      FROM Element_carte
      ORDER BY type");
      //Exécution de la requete
      $stmt->execute();
      //Récupération du résultat dans la variable resultat
      $resultat = $stmt->get_result();
      //Fermeture de la connection avec la base de données MySql
      $stmt->close();
      //Retour de la variable resultat
      return $resultat;
    }



    public function getType()
    {
      // Enregistrement de la requete
      $stmt = $this->conn->prepare("SELECT *
        FROM Type");
        //Exécution de la requete
        $stmt->execute();
        //Récupération du résultat dans la variable resultat
        $resultat = $stmt->get_result();
        //Fermeture de la connection avec la base de données MySql
        $stmt->close();
        //Retour de la variable resultat
        return $resultat;
      }

      public function getFormule()
      {
        // Enregistrement de la requete
        $stmt = $this->conn->prepare("SELECT *
          FROM Formule");
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

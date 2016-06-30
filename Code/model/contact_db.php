<?php
require_once('abstract_db.php');
class Contact_db extends  Abstract_db
{

  public function getEntreprise()
  {
    // Enregistrement de la requete
    $stmt = $this->conn->prepare("SELECT *
      FROM Entreprise");
      //Exécution de la requete
      $stmt->execute();
      //Récupération du résultat dans la variable resultat
      $resultat = $stmt->get_result();
      //Fermeture de la connection avec la base de données MySql
      $stmt->close();
      //Retour de la variable resultat
      return $resultat;
    }



    public function getMail()
    {
      // Enregistrement de la requete
      $stmt = $this->conn->prepare("SELECT *
        FROM Mail");
        //Exécution de la requete
        $stmt->execute();
        //Récupération du résultat dans la variable resultat
        $resultat = $stmt->get_result();
        //Fermeture de la connection avec la base de données MySql
        $stmt->close();
        //Retour de la variable resultat
        return $resultat;
      }

      public function getAdresse()
      {
        // Enregistrement de la requete
        $stmt = $this->conn->prepare("SELECT *
          FROM Adresse");
          //Exécution de la requete
          $stmt->execute();
          //Récupération du résultat dans la variable resultat
          $resultat = $stmt->get_result();
          //Fermeture de la connection avec la base de données MySql
          $stmt->close();
          //Retour de la variable resultat
          return $resultat;
        }

        public function getTelephone()
        {
          // Enregistrement de la requete
          $stmt = $this->conn->prepare("SELECT *
            FROM Telephone");
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

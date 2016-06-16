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

    public function affichage_liste_Cours()
    {
      //Appel de la fonction getAllElementCarte ()
      //Enregistrement du résultat dans la variable $rsltCours
      $rsltCours = $this->getAllElementCarte ();
      //Si il y a au moins une ligne
      if ($rsltCours->num_rows > 0) {
        //Variable $i enregistre le numero de la ligne à afficher
        $i = 0;
        //Variable $piscine_previous mémorise le nom de la piscine de la ligne précédente
        $piscine_previous = "";
        //Variable $jour_previous mémorise le nom du jour de la ligne précédente
        $jour_previous = "";
        //Variable $color_NOMPISCINE memorise les couleurs associés à la piscine NOMPISCINE
        //la première couleur est pour les lignes paires $i%2==0
        //la deuxième couleur est pour les lignes impaires $i%2!=0
        $color_AMPHITRITE = array("#004a99","#1684d6");
        $color_CARON =  array("#ec7a08","#f7be81");
        $color_PITOT =  array("#02b50d","#9ff781");
        $color_VIVES =  array("#6d3e90","#da81f5");
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rsltCours->fetch_assoc())
        {
          //Si le nom de la piscine de la ligne courante est différent de celui de la ligne précédente
          //On réinitialise $i afin de commencé toujours par la même nuance de couleur
          /*
          if (strcasecmp($row["piscine"], $piscine_previous) > 0)
          {
            $i=0;
          }
          //Si le nom de la piscine de la ligne est NOMPISCINE
          //Alors on enregistre dans la variable $color = $color_NOMPISCINE
          if (strcasecmp($row["piscine"], "AMPHITRITE") == 0)
          {
            $color = $color_AMPHITRITE;
          }
          elseif (strcasecmp($row["piscine"], "PITOT") == 0)
          {
            $color = $color_PITOT;
          }
          elseif (strcasecmp($row["piscine"], "CARON") == 0)
          {
            $color = $color_CARON;
          }
          elseif (strcasecmp($row["piscine"], "VIVES") == 0)
          {
            $color = $color_VIVES;
          }
          */
          //Appel de la fonction affichage_ligne_Cour pour afficher la ligne au format html
        //  echo "libelle".$i,$row["libelle"];
          $this->affichage_ligne_Type($i,$row["libelle"],$row["description"],$row["prix"]);
        //	,$row["description"]);
          //Mises à jours de la variable $jour_previous
        //	$jour_previous = $row["jour"];
          //Mises à jours de la variable $piscine_previous
//$piscine_previous = $row["piscine"];
          //Mises à jours de la variable $i
          $i =  $i + 1;
        }
      }
      else
      {
        echo "0 results";
      }
    }

    public function affichage_ligne_Type($i,$libelle,$description,$prix)
    {
      if ($i%3==0)
      {
        echo '<div class="row box-2">';
      }
        echo '<div class="grid_4">
            <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img0'.($i%9+1).'.jpg" alt=""></div></div>
            <h3>'.$libelle.'</h3>
            <p>'.$description.'</p>
            <h3>'.$prix.' euros </h3>
            <a href="#" class="btn">Read more</a>
        </div>';
        if ($i%3==2)
        {
          echo '</div>';
        }
    }
    //appel de la fonction affichage_liste_Cours()
  }
  ?>

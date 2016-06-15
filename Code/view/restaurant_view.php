<?php
class Restaurant_view
{

  private $db_model;

  function __construct() {
      require_once dirname(__FILE__) . '\..\model\database\restaurant_db.php';
      $this->db_model = new Restaurant_db();
      //******
  }

    public function display_list_ElementCarte()
    {
      //Appel de la fonction getAllElementCarte ()
      //Enregistrement du résultat dans la variable $rsltCours
      $rsltCours = $this->db_model->getAllElementCarte ();
      //Si il y a au moins une ligne
      if ($rsltCours->num_rows > 0) {
        //Variable $i enregistre le numero de la ligne à afficher
        $i = 0;
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rsltCours->fetch_assoc())
        {
          $this->display_ligne_ElementCarte($i,$row["libelle"],$row["description"],$row["prix"]);
          $i =  $i + 1;
        }
      }
      else
      {
        echo "0 results";
      }
    }

    public function display_ligne_ElementCarte($i,$libelle,$description,$prix)
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
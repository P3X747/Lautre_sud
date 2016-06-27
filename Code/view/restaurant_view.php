<?php
require_once('abstract_view.php');
class Restaurant_view extends Abstract_view
{

  function __construct() {
    require_once dirname(__FILE__) . '\..\model\database\restaurant_db.php';
    $this->db_model = new Restaurant_db();
    //******
  }

  public function display_list_ElementCarte()
  {
    //Appel de la fonction getAllElementCarte ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getAllElementCarte ();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
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

  public function display_menu_Restaurant()
  {
    echo'<li>
      <a href="restaurant_template.php">Restaurant</a>
      <ul>';
      //Appel de la fonction getAllElementCarte ()
      $rslt_type = $this->db_model->getType();
      //Si il y a au moins une ligne
      if ($rslt_type->num_rows > 0) {
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rslt_type->fetch_assoc())
        {
          echo'
          <li>
          <a href="restaurant_template.php#'.$row["libelle"].'">'.$row["libelle"].'</a>
          </li>';
          }
        }
      echo'
      </ul>
      </li>' ;
  }

  public function display_list_ElementCarte_by_type()
  {
    //Appel de la fonction getAllElementCarte ()
    $rslt_type = $this->db_model->getType();
    //Si il y a au moins une ligne
    if ($rslt_type->num_rows > 0) {
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt_type->fetch_assoc())
      {
        $rslt = $this->db_model->getElementCarte($row["libelle"]);
        echo '<h2 id="'.$row["libelle"].'"><em>'.$row["libelle"].'</em></h2>';
        //Si il y a au moins une ligne
        if ($rslt->num_rows > 0)
        {
          //Variable $i enregistre le numero de la ligne à afficher
          $i = 0;
          //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
          while($row = $rslt->fetch_assoc())
          {
            $this->display_ligne_ElementCarte($i,$row["libelle"],$row["description"],$row["prix"],$row["image"]);
            $i =  $i + 1;
          }
          if ($i%3!=0)
          {
            echo '</div>';
          }
        }
        else
        {
          echo "0 results";
        }
      }
    }
  }


  public function display_list_Type()
  {
    //Appel de la fonction getType ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getType();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $this->display_ligne_Type($i,$row["libelle"],$row["description"]);
        $i =  $i + 1;
      }
      if ($i%3!=2)
      {
        echo '</div>';
      }
    }
    else
    {
      echo "0 results";
    }
  }

  public function display_ligne_Type($i,$libelle,$description)
  {
    if ($i%3==0)
    {
      echo '<div class="row box-2">';
    }
    echo '<div class="grid_4">
    <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img0'.($i%9+1).'.jpg" alt=""></div></div>
    <h3>'.$libelle.'</h3>
    <p>'.$description.'</p>
    <a href="#" class="btn">Read more</a>
    </div>';
    if ($i%3==2)
    {
      echo '</div>';
    }
  }


  public function display_list_Formule()
  {
    //Appel de la fonction getFormule ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getFormule();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $this->display_ligne_Formule($i,$row["libelle"],$row["description"],$row["prix"]);
        $i =  $i + 1;
      }
    }
    else
    {
      echo "0 results";
    }
  }

  public function display_ligne_Formule($i,$libelle,$description,$prix)
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

  public function display_list_Boisson()
  {
    //Appel de la fonction getFormule ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getBoisson();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $this->display_ligne_Boisson($i,$row["libelle"],$row["description"],$row["prix"]);
        $i =  $i + 1;
      }
    }
    else
    {
      echo "0 results";
    }
  }

  public function display_ligne_Boisson($i,$libelle,$description,$prix)
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

}
?>

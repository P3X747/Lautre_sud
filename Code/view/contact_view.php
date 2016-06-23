<?php
class Contact_view
{

  private $db_model;

  function __construct() {
      require_once dirname(__FILE__) . '\..\model\database\contact_db.php';
      $this->db_model = new Contact_db();
      //******
  }

    public function display_list_Entreprise()
    {
      //Appel de la fonction getEntreprise ()
      //Enregistrement du résultat dans la variable $rslt
      $rslt = $this->db_model->getEntreprise();
      //Si il y a au moins une ligne
      if ($rslt->num_rows > 0) {
        //Variable $i enregistre le numero de la ligne à afficher
        $i = 0;
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rslt->fetch_assoc())
        {
          $this->display_ligne_Entreprise($i,$row["libelle"],$row["description"]);
          $i =  $i + 1;
        }
      }
      else
      {
        echo "0 results";
      }
    }

    public function display_ligne_Entreprise($i,$libelle,$description)
    {
      if ($i%3==0)
      {
        echo '<div class="row box-2">';
      }
        echo '<div class="grid_4">
            <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="'."$image".'"  alt=""></div></div>
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

    public function display_list_Telephone()
    {
      //Appel de la fonction getTelephone ()
      //Enregistrement du résultat dans la variable $rslt
      $rslt = $this->db_model->getTelephone();
      //Si il y a au moins une ligne
      if ($rslt->num_rows > 0) {
        //Variable $i enregistre le numero de la ligne à afficher
        $i = 0;
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rslt->fetch_assoc())
        {
          $this->display_ligne_Telephone($row["numero"]);
          $i =  $i + 1;
        }

      }
      else
      {
        echo "0 results";
      }
    }

    public function display_ligne_Telephone($numero)
    {
      echo '<dt>Telphone:</dt> <dd>'.$numero.'</dd><br>';

    }
  }
  ?>
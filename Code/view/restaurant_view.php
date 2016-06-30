<?php
require_once('abstract_view.php');
class Restaurant_view extends Abstract_view
{

  function __construct() {
    require_once dirname(__FILE__) . '\..\model\restaurant_db.php';
    $this->db_model = new Restaurant_db();
    //******
  }

  public function set_html_head()
  {
    $this->html_head =  '
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lautre_sud.css">

        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script>

        <!--[if lt IE 9]>
        <html class="lt-ie9">
        <div style=\' clear: both; text-align:center; position: relative;\'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
                <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                     alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
            </a>
        </div>
        <script src="js/html5shiv.js"></script>
        <![endif]-->

        <script src=\'js/device.min.js\'></script>
    </head>';
  }

  public function set_html_body()
  {
    $html_body =  '<body>
    <div class="page">
    ';
    $html_body = $html_body.$this->get_header_page();
    $html_body = $html_body.'
        <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>L\'autre Sud</em>Restaurant</h2>
                    ';
    $html_body = $html_body.$this->get_list_ElementCarte_by_type();
    $html_body = $html_body.'
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <ul class="socials">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-tumblr"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul>
                <div class="copyright">© <span id="copyright-year"></span> |
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
            <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>
        </footer>s
    </div>

    <script src="js/script.js"></script>
    </body>';
    $this->html_body = $html_body;
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

  public function get_list_ElementCarte_by_type()
  {
    $list_ElementCarte_by_type ="";
    //Appel de la fonction getAllElementCarte ()
    $rslt_type = $this->db_model->getType();
    //Si il y a au moins une ligne
    if ($rslt_type->num_rows > 0) {
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt_type->fetch_assoc())
      {
        $rslt = $this->db_model->getElementCarte($row["libelle"]);
        $list_ElementCarte_by_type = $list_ElementCarte_by_type . '<h2 id="'.$row["libelle"].'"><em>'.$row["libelle"].'</em></h2>';
        //Si il y a au moins une ligne
        if ($rslt->num_rows > 0)
        {
          //Variable $i enregistre le numero de la ligne à afficher
          $i = 0;
          //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
          while($row = $rslt->fetch_assoc())
          {
            $list_ElementCarte_by_type = $list_ElementCarte_by_type.$this->get_ligne_ElementCarte($i,$row["libelle"],$row["description"],$row["prix"],$row["image"]);
            $i =  $i + 1;
          }
          if ($i%3!=0)
          {
            $list_ElementCarte_by_type = $list_ElementCarte_by_type.'</div>';
          }
        }
        else
        {
          $list_ElementCarte_by_type = $list_ElementCarte_by_type."0 results";
        }
      }
    }
    return $list_ElementCarte_by_type;
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
}
?>

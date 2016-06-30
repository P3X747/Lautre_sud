<?php
require_once('abstract_view.php');
class Index_view extends Abstract_view
{

  function __construct() {
  }

  public function set_html_head()
  {
    $this->html_head =  '
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="template\images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=\' clear: both; text-align:center; position: relative;\'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="template\images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src=\'js/device.min.js\'></script>';
  }

  public function set_html_body()
  {
    $html_body =  '<body>
    <div class="page">
    ';
    $html_body = $html_body.$this->get_index_header();
    $html_body = $html_body.$this->get_index_main();
    $html_body = $html_body.$this->get_footer();
    $this->html_body = $html_body;
  }

  public function get_index_header_picture()
  {
    $index_header_picture = '  <div class="camera_container">
    <div id="camera" class="camera_wrap">
    <div data-thumb="template\images\restaurant\Plat\couscous_vegetarien_thumb.jpg" data-src="template\images\restaurant\Plat\couscous_vegetarien.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="template\images\slide02_thumb.jpg" data-src="template\images\patisserie\Makroudhs dattes.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="template\images\restaurant\Entree\images\caviar_aubergine_thumb.jpg" data-src="template\images\restaurant\Entree\caviar_aubergine.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="template\images\slide02_thumb.jpg" data-src="template\images\patisserie\Losanges amandes, pistaches ou noix.JPG">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="template\images\slide02_thumb.jpg" data-src="template\images\patisserie\Cigare noix de cajous ou amandes.JPG">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="template\images\slide03_thumb.jpg" data-src="template\images\patisserie\Baclawa amandes.JPG">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    </div>

    <div class="brand wow fadeIn">
    <h1 class="brand_name">
    <a href="./">L\'autre Sud</a>
    </h1>
    </div>
    </div>';
    return $index_header_picture;
  }

  public function get_index_header_menu()
  {
    $index_header_menu ='<div class="toggle-menu-container">
    <nav class="nav">
    <div class="nav_title"></div>
    <a class="sf-menu-toggle fa fa-bars" href="#"></a>
    <ul class="sf-menu">
    ';
    $index_header_menu = $index_header_menu .$this->get_nav_menu_list();
    $index_header_menu = $index_header_menu .'
    </ul>

    </nav>
    </div>';
    return $index_header_menu;
  }
  public function get_index_header()
  {
    $index_header ="";
    $index_header = $index_header.'<header>';
    $index_header = $index_header.$this->get_index_header_picture();
    $index_header = $index_header.$this->get_index_header_menu();
    $index_header = $index_header.'</header>';
    return $index_header;
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
    <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="template\images/page-4_img0'.($i%9+1).'.jpg" alt=""></div></div>
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
    <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="template\images/page-4_img0'.($i%9+1).'.jpg" alt=""></div></div>
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

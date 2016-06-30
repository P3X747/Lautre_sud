<?php
class Abstract_view
{

  protected $db_model;
  protected $html_head;
  protected $html_body;

  public function get_html_head()
  {
    echo $this->html_head;
  }


  public function get_html_body()
  {
    echo $this->html_body;
  }

  public function get_html()
  {
    $this->set_html_head();
    $this->set_html_body();
    $html = $this->html_head;
    $html = $html.$this->html_body;

    echo $html;
  }

  public function get_head_meta()
  {
    $head_meta = '    <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                     alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
            </a>
        </div>
        <script src="js/html5shiv.js"></script>
        <![endif]-->

        <script src=\'js/device.min.js\'></script>';
        return $head_meta;
  }

  public function get_menu_Restaurant()
  {
    require_once dirname(__FILE__) . '\..\model\restaurant_db.php';
    $db_model = new Restaurant_db();
    $menu_Restaurant='<li>
      <a href="restaurant_template.php">Restaurant</a>
      <ul>';
      //Appel de la fonction getAllElementCarte ()
      $rslt_type = $db_model->getType();
      //Si il y a au moins une ligne
      if ($rslt_type->num_rows > 0) {
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rslt_type->fetch_assoc())
        {
          $menu_Restaurant=$menu_Restaurant.'
          <li>
          <a href="restaurant_template.php#'.$row["libelle"].'">'.$row["libelle"].'</a>
          </li>';
          }
        }
      $menu_Restaurant=$menu_Restaurant.'
      </ul>
      </li>' ;
      return $menu_Restaurant;
  }

  public function get_nav_menu_list()
  {
    $nav_menu_list = '
    <li>
    <a href="index.php">Presentation</a>
    </li>
    ';
    $nav_menu_list = $nav_menu_list.'
    <li>
    <a href="patisserie_template.php">Patisserie</a>
    </li>
    ';
    $menu_restaurant =  $this->get_menu_Restaurant();
    $nav_menu_list = $nav_menu_list . $menu_restaurant;
    $nav_menu_list = $nav_menu_list.'
    <li>
    <a href="epicerie_template.php">Epicerie</a>
    </li>
    ';
    $nav_menu_list = $nav_menu_list.'
    <li>
    <a href="contact_template.php">Contacts</a>
    </li>';
    $nav_menu_list = $nav_menu_list.'
    </ul>';
    return $nav_menu_list;
  }

  public function get_nav_menu()
  {
    $nav_menu = '<nav class="nav">
    <ul class="sf-menu">';
    $nav_menu = $nav_menu.$this->get_nav_menu_list();
    $nav_menu = $nav_menu.'
    </ul>
    </nav>';
    return $nav_menu;
  }

  public function get_header_page()
  {
    $header_page = '
    <header>

    <div id="stuck_container" class="stuck_container">
    <div class="container">

    <div class="brand">
    <h1 class="brand_name">
    <a href="./">L\'autre Sud</a>
    </h1>
    </div>';
    $header_page = $header_page.$this->get_nav_menu();
    $header_page = $header_page.'
    </div>
    </div>
    </header>
    ';
    return $header_page;
  }



  public function get_footer()
  {
    $footer ='<footer>
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
    </footer>';
    return $footer;
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
        $this->html_head = $html_head;
  }

  public function set_html_body()
  {
    $html_body =  '<body></body>';
    $this->html_body = $html_body;
  }

/*
  public function display_ligne_ElementCarte($i,$libelle,$description,$prix,$image)
  {
    if ($i%3==0)
    {
      echo '<div class="row box-2">';
    }
    echo '<div class="grid_4">
    <div class="img">
    <div class="lazy-img" style="padding-bottom: 76.21621621621622%;">
    <div class="container_elt_crte">
    <img data-src="'."$image".'"  alt="">
      <h3 class="prix_elt_crte">'.$prix.' € </h3>
  </div>
    </div>
    </div>
    <br>
    <br>
    <table style="width:100%;">
      <tr>
        <td align="left"><h3 class="elt_crte"><em>'.$libelle.'<em></h3></td>
        <td align="right"><p class="elt_crte">'.$description.'</p></td>
      </tr>
    </table>
    </div>';
    if ($i%3==2)
    {
      echo '</div>';
    }
  }
  */

  public function get_ligne_ElementCarte($i,$libelle,$description,$prix,$image)
  {
    $ligne_Article ="";
    if ($i%3==0)
    {
      $ligne_Article = $ligne_Article . '<div class="row box-2">';
    }
    $ligne_Article = $ligne_Article . '<div class="grid_4">
    <div class="img">
    <div class="lazy-img" style="padding-bottom: 76.21621621621622%;">
    <div class="container_elt_crte">
    <img data-src="'."$image".'"  alt="">
      <h3 class="prix_elt_crte">'.$prix.' € </h3>
  </div>
    </div>
    </div>
    <br>
    <br>
    <table style="width:100%;">
      <tr>
        <td align="left"><h3 class="elt_crte"><em>'.$libelle.'<em></h3></td>
        <td align="right"><p class="elt_crte">'.$description.'</p></td>
      </tr>
    </table>
    </div>';
    if ($i%3==2)
    {
      $ligne_Article = $ligne_Article . '</div>';
    }
    return $ligne_Article;
  }

}
?>

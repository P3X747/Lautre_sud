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

  
  public function get_index_main()
  {
    $index_main = '<main>
    <section class="well">
    <div class="container">
    <h2><em>Welcome</em>to Our Place</h2>
    <div class="row">
    <div class="grid_6">
    <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/restaurant/Boisson/cafe_espresso_malongo.jpg" alt=""></div></div>
    <p class="center indents-1">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
    </div>
    <div class="grid_6">
    <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/page-1_img02.jpg" alt=""></div></div>
    <p class="center indents-1">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
    </div>
    </div>
    <div class="decoration"><a href="#" class="btn">Read more</a></div>
    <h2><em>Our</em>Cuisine</h2>
    </div>
    <div class="gallery">
    <div class="gallery_col-1">
    <a data-fancybox-group="gallery" href="images/page-1_img03_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
    <img data-src="images/page-1_img03.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img04_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
    <img data-src="images/page-1_img04.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img05_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
    <img data-src="images/page-1_img05.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    </div>
    <div class="gallery_col-2">
    <a data-fancybox-group="gallery" href="images/page-1_img06_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
    <img data-src="images/page-1_img06.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img07_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
    <img data-src="images/page-1_img07.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img08_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
    <img data-src="images/page-1_img08.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    </div>
    <div class="gallery_col-3">
    <a data-fancybox-group="gallery" href="images/page-1_img09_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
    <img data-src="images/page-1_img09.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img10_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
    <img data-src="images/page-1_img10.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    <a data-fancybox-group="gallery" href="images/page-1_img11_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
    <img data-src="images/page-1_img11.jpg" alt="">
    <div class="gallery_overlay">
    <div class="gallery_caption">
    <p><em>Lorem Blandit</em></p>
    <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
    </div>
    </div>
    </a>
    </div>
    </div>
    </section>
    <section class="parallax parallax1" data-parallax-speed="-0.4">
    <div class="container">
    <h2><em>Our </em>Experience</h2>
    <p class="indents-2">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci </p>
    <a href="#" class="btn">View full menu</a>
    </div>
    </section>
    <section class="well well__offset-1 bg-1">
    <div class="container">
    <h2><em>Our </em>Cooks</h2>
    <div class="row row__offset-1">
    <div class="grid_4">
    <figure>
    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img12.jpg" alt=""></div>
    <figcaption>Kevin Grey</figcaption>
    </figure>
    <h3>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
    </div>
    <div class="grid_4">
    <figure>
    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img13.jpg" alt=""></div>
    <figcaption>Linda Klein</figcaption>
    </figure>
    <h3>Oeteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
    </div>
    <div class="grid_4">
    <figure>
    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img14.jpg" alt=""></div>
    <figcaption>Ann Shelton</figcaption>
    </figure>
    <h3>Koteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
    <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
    </div>
    </div>
    <div class="decoration"><a href="#" class="btn">Read more</a></div>
    </div>
    </section>
    <section class="well well__offset-2">
    <div class="container center">
    <h2><em>Make </em>a Reservation</h2>
    <p class="indents-2">Fnteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol.</p>
    <address class="address-1">
    <dl><dt>Address:</dt> <dd>4578 Marmora Road, Glasgow DA04 89GR</dd></dl>
    <p><em>800 2345-6789</em></p>
    </address>
    </div>
    </section>
    </main>';
    return $index_main;
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

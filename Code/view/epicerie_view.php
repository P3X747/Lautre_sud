<?php
require_once('abstract_view.php');
class Epicerie_view extends Abstract_view
{

  public function __construct() {
      require_once dirname(__FILE__) . '\..\model\epicerie_db.php';
      $this->db_model = new Epicerie_db();
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
                    <h2><em>L\'autre Sud</em>Epicerie</h2>
                    <h2><em>Article</em></h2>
                    ';
    $html_body = $html_body.$this->get_list_Article();
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
        </footer>
    </div>

    <script src="js/script.js"></script>
    </body>';
    $this->html_body = $html_body;
  }

  private function display_list_Article()
  {
    //Appel de la fonction getAllArticle ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getAllArticle();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $this->display_ligne_ElementCarte($i,$row["libelle"],$row["description"],$row["prix"],$row["image"]);
        $i =  $i + 1;
      }
    }
    else
    {
      echo "0 results";
    }
  }

  private function get_list_Article()
  {
    $list_Article ="";
    //Appel de la fonction getAllArticle ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getAllArticle();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $list_Article = $list_Article.$this->get_ligne_ElementCarte($i,$row["libelle"],$row["description"],$row["prix"],$row["image"]);
        $i =  $i + 1;
      }
    }
    else
    {
      $list_Article = $list_Article."0 results";
    }
    return $list_Article;
  }

  private function get_ligne_Article($i,$libelle,$description,$prix,$image)
  {
    $ligne_Article ="";
    if ($i%3==0)
    {
      $ligne_Article = $ligne_Article.'<div class="row box-2">';
    }
      $ligne_Article = $ligne_Article. '<div class="grid_4">
          <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="'."$image".'" alt=""></div></div>
          <h3>'.$libelle.'</h3>
          <p>'.$description.'</p>
          <h3>'.$prix.' euros </h3>
          <a href="#" class="btn">Read more</a>
      </div>';
      if ($i%3==2)
      {
        $ligne_Article = $ligne_Article. '</div>';
      }
  }

  private function display_ligne_Article($i,$libelle,$description,$prix,$image)
  {
    if ($i%3==0)
    {
      echo '<div class="row box-2">';
    }
      echo '<div class="grid_4">
          <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="'."$image".'" alt=""></div></div>
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

    private function display_list_Gamme()
    {
      //Appel de la fonction getGamme ()
      //Enregistrement du résultat dans la variable $rslt
      $rslt = $this->db_model->getGamme();
      //Si il y a au moins une ligne
      if ($rslt->num_rows > 0) {
        //Variable $i enregistre le numero de la ligne à afficher
        $i = 0;
        //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
        while($row = $rslt->fetch_assoc())
        {
          $this->display_ligne_Gamme($i,$row["libelle"],$row["description"]);
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

    private function display_ligne_Gamme($i,$libelle,$description)
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

  }
  ?>

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
    <div data-thumb="images\restaurant\Plat\couscous_vegetarien_thumb.jpg" data-src="images\restaurant\Plat\couscous_vegetarien.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="images/slide02_thumb.jpg" data-src="images\patisserie\Makroudhs dattes.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="images\restaurant\Entree\images\caviar_aubergine_thumb.jpg" data-src="images\restaurant\Entree\caviar_aubergine.jpg">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="images/slide02_thumb.jpg" data-src="images\patisserie\Losanges amandes, pistaches ou noix.JPG">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="images/slide02_thumb.jpg" data-src="images\patisserie\Cigare noix de cajous ou amandes.JPG">
    <div class="camera_caption fadeIn">
    </div>
    </div>
    <div data-thumb="images/slide03_thumb.jpg" data-src="images\patisserie\Baclawa amandes.JPG">
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
      <img data-src="images\page-1_img03.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img04_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
      <img data-src=images\page-1_img04.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img05_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
      <img data-src="images\page-1_img05.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      </div>
      <div class="gallery_col-2">
      <a data-fancybox-group="gallery" href="images\page-1_img06_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
      <img data-src="images\page-1_img06.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img07_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
      <img data-src="images\page-1_img07.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img08_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
      <img data-src="images\page-1_img08.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      </div>
      <div class="gallery_col-3">
      <a data-fancybox-group="gallery" href="images\page-1_img09_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
      <img data-src="images\page-1_img09.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img10_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
      <img data-src="images\page-1_img10.jpg" alt="">
      <div class="gallery_overlay">
      <div class="gallery_caption">
      <p><em>Lorem Blandit</em></p>
      <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
      </div>
      </div>
      </a>
      <a data-fancybox-group="gallery" href="images\page-1_img11_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
      <img data-src="images\page-1_img11.jpg" alt="">
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
      <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images\page-1_img12.jpg" alt=""></div>
      <figcaption>Kevin Grey</figcaption>
      </figure>
      <h3>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
      <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
      </div>
      <div class="grid_4">
      <figure>
      <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images\page-1_img13.jpg" alt=""></div>
      <figcaption>Linda Klein</figcaption>
      </figure>
      <h3>Oeteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl </h3>
      <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
      </div>
      <div class="grid_4">
      <figure>
      <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images\page-1_img14.jpg" alt=""></div>
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
}
?>

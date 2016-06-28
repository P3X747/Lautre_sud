<?php
include "restaurant_view.php";

function get_nav_menu_list()
{
  echo'
  <li>
  <a href="index.php">Presentation</a>
  </li>
  ';
  echo'
  <li>
  <a href="patisserie_template.php">Patisserie</a>
  </li>
  ';
  $restaurant_view = new Restaurant_view();
  $restaurant_view->display_menu_Restaurant();
  echo'
  <li>
  <a href="epicerie_template.php">Epicerie</a>
  </li>
  ';
  echo'
  <li>
  <a href="contact_template.php">Contacts</a>
  </li>';
  echo'
  </ul>';
}

function get_nav_menu()
{
  echo '<nav class="nav">
  <ul class="sf-menu">';
  get_nav_menu_list();
  echo'
  </ul>
  </nav>';
}

function get_header_page()
{
  echo '
  <header>

  <div id="stuck_container" class="stuck_container">
  <div class="container">

  <div class="brand">
  <h1 class="brand_name">
  <a href="./">L\'autre Sud</a>
  </h1>
  </div>';
  get_nav_menu();
  echo '
  </div>
  </div>

  </header>
  ';
}
function get_index_header_picture()
{
  echo '  <div class="camera_container">
  <div id="camera" class="camera_wrap">
  <div data-thumb="images/slide01_thumb.jpg" data-src="images/slide01.jpg">
  <div class="camera_caption fadeIn">
  </div>
  </div>
  <div data-thumb="images/slide02_thumb.jpg" data-src="images/slide02.jpg">
  <div class="camera_caption fadeIn">
  </div>
  </div>
  <div data-thumb="images/slide03_thumb.jpg" data-src="images/slide03.jpg">
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
}

function get_index_header_menu()
{
  echo '<div class="toggle-menu-container">
  <nav class="nav">
  <div class="nav_title"></div>
  <a class="sf-menu-toggle fa fa-bars" href="#"></a>
  <ul class="sf-menu">
  ';
  get_nav_menu_list();
  echo'
  </ul>

  </nav>
  </div>';
}
function get_index_header()
{
  echo '<header>'.get_index_header_picture().get_index_header_menu().'</header>';
}
function get_index_main()
{
  echo '<main>
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
}
function get_footer()
{
  echo '<footer>
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
}
?>

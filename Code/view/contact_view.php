<?php
require_once('abstract_view.php');
class Contact_view extends Abstract_view
{

  function __construct() {
      require_once dirname(__FILE__) . '\..\model\contact_db.php';
      $this->db_model = new Contact_db();
  }

  public function set_html_head()
  {
    $this->html_head = '      <head>
              <title>Menu</title>
              <meta charset="utf-8">
              <meta name="format-detection" content="telephone=no"/>
              <link rel="icon" href="images/favicon.ico" type="image/x-icon">
              <link rel="stylesheet" href="css/grid.css">
              <link rel="stylesheet" href="css/style.css">
              <link rel="stylesheet" href="css/contact-form.css">

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
                <h2><em>Our</em>Contacts</h2>
                <div class="map">
                  <div id="google-map" class="map_model"></div>
                  <ul class="map_locations">
                    <li data-x="3.877105" data-y="43.607215">
                      <p> L\'autre Sud, 26 rue des Etuves 34000 Montpellier </p>
                    </li>
                  </ul>
                </div>
                <div class="map">
                  <div id="google-map1" class="map_model"></div>
                  <ul class="map_locations">
                    <li data-x="3.877105" data-y="43.607215">
                      <p> L\'autre Sud, 26 rue des Etuves 34000 Montpellier </p>
                    </li>
                  </ul>
                </div>
                <div class="row box-3">
                    <div class="grid_5">
                        <h2>Contacts Form</h2>
                        <form id="contact-form" class=\'contact-form\'>
                            <div class="contact-form-loader"></div>
                            <fieldset>
                                <label class="name">
                                    Your Name:
                                    <input type="text" name="name" placeholder="" value=""
                                           data-constraints="@Required @JustLetters"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>

                                <label class="email">
                                    Your E-mail:
                                    <input type="text" name="email" placeholder="" value=""
                                           data-constraints="@Required @Email"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>

                                <label class="Subject">
                                    Subject:
                                    <input type="text" name="phone" placeholder="" value=""
                                           data-constraints="@Required"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>

                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder=""
                                              data-constraints=\'@Required @Length(min=20,max=999999)\'></textarea>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>

                                <div class="btn-wr">
                                    <a class="" href="#" data-type="reset">Clear</a>
                                    <a class="" href="#" data-type="submit">Send</a>
                                </div>
                            </fieldset>
                            <div class="modal fade response-message">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">
                                                &times;
                                            </button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            You message has been sent! We will be in touch soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="preffix_1 grid_6">
                        <h2>Contacts Information</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym.<br><br>Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique.</p>
                        <address class="address-2">
                            <div class="address_container"><p>L\'autre Sud, 26 rue des Etuves 34000 Montpellier</p></div>
                            <dl>';
    $html_body = $html_body.$this->get_list_Telephone();
    $html_body = $html_body.$this->get_list_Mail();
    $html_body = $html_body.'
    </dl>
</address>
</div>
</div>
</div>
</section>
</main>

<!--========================================================
      FOOTER
=========================================================-->
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

  public function display_list_Mail()
  {
    //Appel de la fonction getMail ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getMail();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $this->display_ligne_Mail($row["valeur"]);
        $i =  $i + 1;
      }

    }
    else
    {
      echo "0 results";
    }
  }

  public function display_ligne_Mail($valeur)
  {
    echo '<dt>E-mail:</dt> <dd><a href="'.$valeur.'">'.$valeur.'</dd><br>';
  }

  public function get_list_Telephone()
  {
    $list_Telephone = "";
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
        $list_Telephone = $list_Telephone.$this->get_ligne_Telephone($row["numero"]);
        $i =  $i + 1;
      }

    }
    else
    {
      $list_Telephone."0 results";
    }
    return $list_Telephone;
  }

  public function get_ligne_Telephone($numero)
  {
    $ligne_Telephone ='<dt>Telphone:</dt> <dd>'.$numero.'</dd><br>';
    return $ligne_Telephone;
  }

  public function get_list_Mail()
  {
    $list_Mail='';
    //Appel de la fonction getMail ()
    //Enregistrement du résultat dans la variable $rslt
    $rslt = $this->db_model->getMail();
    //Si il y a au moins une ligne
    if ($rslt->num_rows > 0) {
      //Variable $i enregistre le numero de la ligne à afficher
      $i = 0;
      //La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
      while($row = $rslt->fetch_assoc())
      {
        $list_Mail = $list_Mail.$this->get_ligne_Mail($row["valeur"]);
        $i =  $i + 1;
      }

    }
    else
    {
      $list_Mail = $list_Mail."0 results";
    }
    return $list_Mail;
  }

  public function get_ligne_Mail($valeur)
  {
    $ligne_Mail ='<dt>E-mail:</dt> <dd><a href="'.$valeur.'">'.$valeur.'</dd><br>';
    return $ligne_Mail;
  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">Cafe</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="index-1.html">About</a>
                            <ul>
                                <li>
                                    <a href="#">Quisque nulla</a>
                                </li>
                                <li>
                                    <a href="#">Vestibulum libero</a>
                                    <ul>
                                        <li>
                                            <a href="#">Lorem</a>
                                        </li>
                                        <li>
                                            <a href="#">Dolor</a>
                                        </li>
                                        <li>
                                            <a href="#">Sit amet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vivamus eget nibh</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">What We Do</a>
                        </li>
                        <li class="active">
                            <a href="index-3.html">Menu</a>
                        </li>
                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>L'autre Sud</em>Menu</h2>
                <?php
          			function getAllCours()
          			{
          				//Enregistrement de la requête
          				//Variable permettant d'enregiter la connection
          				$conn;
          				//Récupération de la configuration de la base de données
          				define('DB_USERNAME', 'root');
          			 //define('DB_PASSWORD', 'gazlot');
                  define('DB_PASSWORD', 'password');
          				define('DB_HOST', '127.0.0.1');
          				define('DB_NAME', 'db_lautre_sud');

          				// Connection à la base de données mysql
          				$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

          				// Traitement du cas d'erreur de la fonction de connecion
          				if (mysqli_connect_errno()) {
          					echo "Failed to connect to MySQL: " . mysqli_connect_error();
          				}

          				// Enregistrement de la requete
          				$stmt = $conn->prepare("SELECT *
          					FROM Element_carte");
          					//Exécution de la requete
          					$stmt->execute();
          					//Récupération du résultat dans la variable resultat
          					$resultat = $stmt->get_result();
          					//Fermeture de la connection avec la base de données MySql
          					$stmt->close();
          					//Retour de la variable resultat
          					return $resultat;
          				}

          				function affichage_liste_Cours()
          				{
          					//Appel de la fonction getAllCours()
          					//Enregistrement du résultat dans la variable $rsltCours
          					$rsltCours = getAllCours();
          					//Si il y a au moins une ligne
          					if ($rsltCours->num_rows > 0) {
          						//Variable $i enregistre le numero de la ligne à afficher
          						$i = 0;
          						//Variable $piscine_previous mémorise le nom de la piscine de la ligne précédente
          						$piscine_previous = "";
          						//Variable $jour_previous mémorise le nom du jour de la ligne précédente
          						$jour_previous = "";
          						//Variable $color_NOMPISCINE memorise les couleurs associés à la piscine NOMPISCINE
          						//la première couleur est pour les lignes paires $i%2==0
          						//la deuxième couleur est pour les lignes impaires $i%2!=0
          						$color_AMPHITRITE = array("#004a99","#1684d6");
          						$color_CARON =  array("#ec7a08","#f7be81");
          						$color_PITOT =  array("#02b50d","#9ff781");
          						$color_VIVES =  array("#6d3e90","#da81f5");
          						//La fonction fetch_assoc() permet de lire ligne par ligne le résultat de la requete sql
          						while($row = $rsltCours->fetch_assoc())
          						{
          							//Si le nom de la piscine de la ligne courante est différent de celui de la ligne précédente
          							//On réinitialise $i afin de commencé toujours par la même nuance de couleur
                        /*
          							if (strcasecmp($row["piscine"], $piscine_previous) > 0)
          							{
          								$i=0;
          							}
          							//Si le nom de la piscine de la ligne est NOMPISCINE
          							//Alors on enregistre dans la variable $color = $color_NOMPISCINE
          							if (strcasecmp($row["piscine"], "AMPHITRITE") == 0)
          							{
          								$color = $color_AMPHITRITE;
          							}
          							elseif (strcasecmp($row["piscine"], "PITOT") == 0)
          							{
          								$color = $color_PITOT;
          							}
          							elseif (strcasecmp($row["piscine"], "CARON") == 0)
          							{
          								$color = $color_CARON;
          							}
          							elseif (strcasecmp($row["piscine"], "VIVES") == 0)
          							{
          								$color = $color_VIVES;
          							}
                        */
          							//Appel de la fonction affichage_ligne_Cour pour afficher la ligne au format html
                      //  echo "libelle".$i,$row["libelle"];
          							affichage_ligne_Type($i,$row["libelle"],$row["description"],$row["prix"]);
          						//	,$row["description"]);
          							//Mises à jours de la variable $jour_previous
          						//	$jour_previous = $row["jour"];
          							//Mises à jours de la variable $piscine_previous
//$piscine_previous = $row["piscine"];
          							//Mises à jours de la variable $i
          							$i =  $i + 1;
          						}
          					}
          					else
          					{
          						echo "0 results";
          					}
          				}

          				function affichage_ligne_Type($i,$libelle,$description,$prix)
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
          				//appel de la fonction affichage_liste_Cours()
          				affichage_liste_Cours();
          				?>
                <div class="row box-2">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img01.jpg" alt=""></div></div>
                        <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img02.jpg" alt=""></div></div>
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img03.jpg" alt=""></div></div>
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="row box-2">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img04.jpg" alt=""></div></div>
                        <h3>Onteger convallis orci vel mi nelaoreet, at ornare lorem consequate. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequa.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img05.jpg" alt=""></div></div>
                        <h3>Fenteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutp turpis ut massa commodo, quis aliquam massa facilisis.Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img06.jpg" alt=""></div></div>
                        <h3>Dernteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem conseasellus era nisl. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="row box-2">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img07.jpg" alt=""></div></div>
                        <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img08.jpg" alt=""></div></div>
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img09.jpg" alt=""></div></div>
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                        <a href="#" class="btn">Read more</a>
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
</body>
</html>

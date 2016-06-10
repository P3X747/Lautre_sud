<?php
class Db_Connect
{
    //Variable permettant d'enregiter la connection
    private $conn;

    //Fonction gérant la création d'une connection
    function connect()
    {
        //Récupération de la configuration de la base de données
        include_once dirname(__FILE__) . '/Config.php';

        // Connection à la base de données mysql
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Traitement du cas d'erreur de la fonction de connecion
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $this->conn;
    }
}
?>

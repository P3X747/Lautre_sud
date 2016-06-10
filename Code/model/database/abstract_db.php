<?php
class Abstract_db
{
    protected $conn;

    function __construct() {
        require_once dirname(__FILE__) . '\db_connect.php';
        // opening db connection
        $db = new Db_Connect();
        $this->conn = $db->connect();
        //******
    }
}
?>

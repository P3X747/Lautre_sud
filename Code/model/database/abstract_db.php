<?php
class Abstract_db
{
    protected $conn;
    protected $db;

    function __construct() {
        require_once dirname(__FILE__) . '\db_connect.php';
        // opening db connection
        $this->db = new Db_Connect();
        $this->conn = $this->db->connect();
        //******
    }
}
?>

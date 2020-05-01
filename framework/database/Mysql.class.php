<?php
class MySql
{
    public $conn;

    function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpTest";

        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
}

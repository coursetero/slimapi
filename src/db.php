<?php
class db{
    // Properties
    private $dbhost = 'local.slimapi.com';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'slimapi';
    // Connect
    public function connect(){
        $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname;port=3306";
        $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
}
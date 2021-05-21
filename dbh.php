<?php 

class Dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    //we use this class to connect to the database
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "instyledecor";

        $conn = new mysqli($this->servername ,
        $this->username ,$this->password ,$this->dbname);

        return $conn;

    }
}


?>
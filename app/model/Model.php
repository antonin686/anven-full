<?php

class Model {

    protected $table_name ;

    function __construct() {

    }

    public function insert ($datas)
    {
        $coloums = " ";
        $values = " ";
        
        foreach ($datas as $key => $value) {

            $coloums .= $key.", ";
            $values .= "'".$value."', ";
        }

        $coloums = rtrim(trim($coloums), ',');
        $values = rtrim(trim($values), ',');

        $sql = "INSERT INTO {$this->table_name} ( {$coloums} ) values ( {$values} ) ;";
        
        require __DIR__ . "/../../database/config.php";

        //echo $sql;
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }

    public function all ()
    {

        $sql = "SELECT * FROM {$this->table_name}";
        
        require __DIR__ . "/../../database/config.php";

        //echo $sql;
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        $result = mysqli_query($conn, $sql);

        //return $result;
        if ($result) {
            // output data of each row
            return $result;
        } else {
            echo "0 results";
        }

        $conn->close();

    }
}
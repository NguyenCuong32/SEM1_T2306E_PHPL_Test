<?php
        $host = "localhost:3306";
        $username = "root";
        $password = "abc123";
        $dbname = "ProductManagement";
        $phpconn = mysqli_connect($host, $username, $password,$dbname);
        if(!$phpconn)
        {
            die("Could not connect to database: Please verify the priviledges" . mysqli_error());
        }
            echo "Connection to database is successful";

        $sql = "CREATE DATABASE IF not exists ProductManagement";
          if($phpconn->query($sql)===TRUE)
        {
            echo "<br>Task complete.";
           
        }   else {
            echo "You have an error while creating database: ".$phpconn->error;
        }

        $sqlReport = "SELECT producttype AS 'Product Type', sum(quantity) AS 'Total Quantity', note FROM Product";
        if($phpconn->query($sqlProduct)===TRUE)
        {
            echo "<br>Task complete";
            
        }   else {
            echo "Error creating table: ".$phpconn->error;
        }
?>


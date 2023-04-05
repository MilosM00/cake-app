<?php 

    $connection = new mysqli("localhost", "root", "", "cake");

    if($connection->connect_error)
    {
        echo "MySQL failed. " . $connection->error;
        exit();
    }

?>
<?php

function connect()
{
    $db_connection = mysqli_connect('localhost','root','mahesa','web_programming_1');
    
    if ($db_connection -> connect_error) {
        echo "Failed to connect to MySQL: " . $db_connection -> connect_error;
    }else{
        return $db_connection;
    }
}


?>
<?php 

    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DATABASE = "college";

    $cn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

    if (mysqli_connect_error()) {
        echo "Error connecting to database";
    }





?>
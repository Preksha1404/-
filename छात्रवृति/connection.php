<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="chatrvruti";

	$conn= mysqli_connect('$servername','$username','$password','$dbname');
    if(mysqli_connect_error()){
        echo"failed to connect";
        exit();
    }
    ?>
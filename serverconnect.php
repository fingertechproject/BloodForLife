<?php
$server="localhost";
$username="root";
$password="";
$database="donoconnect";
$con= mysqli_connect("$server","$username","$password","$database");
if(!$con){
    
    die("connection to this database failed" . mysqli_connect_error());

}


?>
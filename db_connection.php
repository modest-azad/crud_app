<?php
// defing parameter that need to pass during DB connection 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","crud_operation");

// making connection with mySQL 
 $connect = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

 if(!$connect){
    die ("Connection Failed !");
 }

?>
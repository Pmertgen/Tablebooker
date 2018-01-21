<?php
//error_reporting(0);

DEFINE ("dbhost", "localhost");
DEFINE ("dbuser", "root");
DEFINE ("dbpw", "");
DEFINE ("dbname", "tischsystem");

//global $dbconn;
$dbconn = new mysqli(dbhost, dbuser, dbpw, dbname);


//check if connection is successful
if ($dbconn->connect_errno){
    trigger_error("Could not connect to DB</br>");
    echo mysqli_connect_error();
    exit();

} else{
    echo "You are connected to the DB.</br>";
    require ('ask_db.php');
   }
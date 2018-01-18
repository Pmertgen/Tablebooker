<?php
// suppress errors
error_reporting(0);

if (isset($_POST["submitguests"]))
{
  $people = $_POST["people"];

    if($people>0)
    {
        echo "You chose to book for " . $people . " people.</br>";
    }
        else {
                echo( "Please choose a number of guests</br>");
                header("../bookme.php");
              }
}


require_once("../private/dbconn.php");


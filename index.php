<?php require "header.html";?>

<div class="container">
<div class="card">
  <div class="card-header bg-warning">
    Tablebooker 1.0
  </div>
  <div class="card-body bg-secondary">
     
    <?php
// suppress errors
error_reporting(0);

$time = $_POST["time"];
$date = $_POST["date"];

if (isset($_POST["submitguests"]))
{
  $people = $_POST["people"];

    if($people>0)
    {
        echo "<h2>You chose to book for " . $people . " people.</h2></br>";
    }
        else {
                echo( "Please choose a number of guests</br>");
                
              }
}

require_once("dbconn.php");
?>
    
  </div>
</div>
</div>


</body>
</html>


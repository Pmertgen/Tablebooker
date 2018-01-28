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



if (isset($_POST["submitguests"]))
{
  $people = $_POST["people"];

    echo "<h2>You chose to book for " . $people . " people.</h2></br>";
}

require_once("dbconn.php");
?>
    
  </div>
</div>
</div>


</body>
</html>


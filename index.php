<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <title>Tablebooker</title>
</head>
<body>

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


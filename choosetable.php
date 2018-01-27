<?php
require "header.html";

?>

<div class="container">
<div class="card">
  <div class="card-header bg-warning">
    Tablebooker 1.0
  </div>
  <div class="card-body bg-secondary">

<?php
if (isset($_POST['reserve'])) {
	//$time = $_POST["time"];
	//$date = $_POST["date"];
	$table = $_POST['choosetable'];

	echo "You chose table number: " . $table . "</br>";
	//echo "This is for: " . $time . $date; 

} else{

	echo "Please select a table to reserve</br>";

}
?>
</div>
</div>
</div>
</body>
</html>
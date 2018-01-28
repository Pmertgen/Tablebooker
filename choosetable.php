<?php
require "header.html";


if (isset($_POST['reserve'])) {
	//$time = $_POST["time"];
	//$date = $_POST["date"];
	$table = $_POST['choosetable'];

	echo "You chose table number: " . $table . "</br>";
	//echo "This is for: " . $time . $date; 

} 
?>
</div>
</div>
</div>
</body>
</html>
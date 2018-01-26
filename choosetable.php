<?php


if (isset($_POST['submitguests'])) {

	$table = $_POST['choosetable'];
	echo "You chose table number: " . $table;

} else{

	echo "Please select a table to reserve</br>";

}

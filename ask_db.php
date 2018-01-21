<?php

 	$sql = "SELECT * FROM tablebooker WHERE seats>=$people";
    $result = mysqli_query($dbconn, $sql);

//Create 2 arrays
    $tableNo = array();
    $seats = array();

//Push data into arrays
    while ($row = mysqli_fetch_object($result))
    {
      array_push($tableNo, $row->table_no);
      array_push($seats, $row->seats);
    }

//Show tables with enough seats
    $possible_tables = implode(",", $tableNo);
    echo "The following table(s) are suitable. Table number: " . $possible_tables . "</br>";
?>

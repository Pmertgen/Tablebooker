
<?php

 	$sql = "SELECT * FROM Tables WHERE table_seats>=$people";
    $result = mysqli_query($dbconn, $sql);

//Create 2 arrays
    $table_no = array();
    $table_seats = array();

//Push data into arrays
    while ($row = mysqli_fetch_object($result))
    {
      array_push($table_no, $row->table_no);
      array_push($table_seats, $row->table_seats);
    }

//Show tables with enough seats
    $possible_tables = implode(",", $table_no);
    echo "<h3>The following table(s) are suitable: " . $possible_tables . "</h3></br>";

//Let the user choose one table
    echo "<h4>Which table do you wish to reserve?</h4></br>";
?>
    <form action="choosetable.php" method="post">
        <input type="text" name="choosetable">
        <button class="btn btn-warning" type="submit" name="submitguests">Reserve table</button>
    </form>
    </body>
    </html>


<?php require "header.html";?>

<div class="container">
<div class="card">
  <div class="card-header bg-warning">
    Tablebooker 1.0
  </div>
  <div class="card-body bg-secondary">
     
     <form action="index.php" target="_self" method="post">
    	<h3>Please select a number of guests and the time</h3>
        <select name="people">
    		<option>2</option>
    		<option>3</option>
    		<option>4</option>
    		<option>5</option>
    		<option>6</option>
    		<option>7</option>
    		<option>8</option>
    	</select>
      <input type="time" name="time">
      <input type="date" name="date">
        	<br><br>
    	<button class="btn btn-warning" type="submit" name="submitguests">Check availability</button>
    </form>
    
  </div>
</div>
</div>


</body>
</html>
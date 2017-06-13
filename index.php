<html>
<head>
<style>
div {
    background-color: white;
    width: 350px;
    border: 25px solid grey;
    padding: 25px;
    margin-top: 205px;
    margin-bottom: 100px;
}
</style>
</head>
<body>
	<center>
		<div>	
		<form action ="#" method = "post">
		<input type="hidden" name="curr_date" value='<?php echo date("M d, Y"); ?>'>
		WEEK: <input type = "textbox" min = '1' name = "weektxt"> <br>
		<button type='submit' name="addweek">Add Weeks</button><br>
		<br>
		</form>

		<form action ="#" method = "post">
		<input type="hidden" name="curr_date" value='<?php echo date("M d, Y"); ?>'>
	    MONTH: <input type = "textbox" min = '1' name = "monthtxt"> <br>
		<button type='submit' name= "addmonth">Add Month</button><br>
		<br>
		</form>

		<form action ="#" method = "post">
		<input type="hidden" name="curr_date" value='<?php echo date("M d, Y"); ?>'>
	    YEAR: <input type = "textbox" min = '1' name = "yeartxt"> <br>
		<button type='submit' name= "addyear">Add Year</button><br>
		<br>
		</form>

		<form method ='post' action='#'>

		<button name = 'date' value = "Monday">MON</button>
		<button name = 'date' value = "Tuesday">TUE</button>
		<button name = 'date' value = "Wednesday">WED</button>
		<button name = 'date' value = "Thursday">THU</button>
		<button name = 'date' value = "Friday">FRI</button>
		<button name = 'date' value = "Saturday">SAT</button>
		<button name = 'date' value = "Sunday">SUN</button>
		</form> <br> <br>
		<p> DATE: </p>
		<?php
			$date = "Monday";
			if(isset($_POST['date'])){
			$date = $_POST['date'];
			}
			if(isset($_POST['addweek'])){
				$curr_date = $_POST ['curr_date'];
				$weeks = $_POST['weektxt'];
				$date = "+" . $weeks. "week," .$curr_date;
			}
			if(isset($_POST['addmonth'])){
				$curr_date = $_POST ['curr_date'];
				$month = $_POST['monthtxt'];
				$date = "+" . $month . "month," .$curr_date;
			}
			if (isset($_POST['addyear'])) {
				$curr_date = $_POST ['curr_date'];
				$year = $_POST['yeartxt'];
				$date = "+" . $year . "year," .$curr_date;
			}
			$sdate = strtotime($date);
			echo date("M d, Y", $sdate);
			?>
</div>
</center>
</body>
</html>
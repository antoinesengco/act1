<html>
<body>
<br>
<br>
<br>
<br>
<br>
            <center>
        <form method ='post' action='#'>

        <button name = 'date' value = "Monday">MON</button>
        <button name = 'date' value = "Tuesday">TUE</button>
        <button name = 'date' value = "Wednesday">WED</button>
        <button name = 'date' value = "Thursday">THU</button>
        <button name = 'date' value = "Friday">FRI</button>
        <button name = 'date' value = "Saturday">SAT</button>
        <button name = 'date' value = "Sunday">SUN</button>
        </form>

        <form action ="#" method = "post">
        <input type="hidden" name="curr_date" value='<?php echo date("M d, Y",$sdate); ?>'>
        WEEK: <input type = "number" min = '1' name = "weektxt">
        <button type='submit' name="addweek">Enter Weeks</button><br>
        <br>
        </form>

        <form action ="#" method = "post">
        <input type="hidden" name="curr_date" value='<?php echo date("M d, Y",$sdate); ?>'>
        MONTH: <input type = "number" min = '1' name = "monthtxt">
        <button type='submit' name= "addmonth">Enter Month</button><br>
        <br>
        </form>
    </center>
<center>
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
            $sdate = strtotime($date);
            echo date("M d, Y", $sdate);
            ?> </center>
</body>
</html>
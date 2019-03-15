<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="employee.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">Employee Details</div>
            <form action="salaryinsert.php" method="post">
                <input type="text" name="month" id="" placeholder=" Month" autocomplete="off" required>
                <input type="number" name="salary" id="" placeholder=" Salary" autocomplete="off" required>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
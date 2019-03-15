<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$current = Date('F');
$lastmonth = Date('F',strtotime("last month"));
$query = "SELECT emp_details.employee_name,emp_details.contact,emp_details.date_of_birth,emp_details.department,emp_details.base_salary FROM emp_details WHERE join_month = '{$lastmonth}'";
$execute = $conn->prepare($query);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");

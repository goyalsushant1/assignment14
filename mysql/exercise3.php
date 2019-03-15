<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$month = date('F');
$query = "SELECT emp_details.employee_name,emp_details.contact,salary_details.salary,salary_details.month FROM emp_details,salary_details WHERE salary_details.month = '{$month}' AND emp_details.employee_id = salary_details.employee_id LIMIT 5";
$execute = $conn->prepare($query);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");

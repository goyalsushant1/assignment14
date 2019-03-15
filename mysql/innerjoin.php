<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$current = Date('m/d');
// echo $current;
// die();
$innerjoin = "SELECT emp_details.employee_name,emp_details.contact,salary_details.salary,salary_details.month FROM emp_details INNER JOIN salary_details ON emp_details.employee_id = salary_details.employee_id";
$execute = $conn->prepare($innerjoin);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");

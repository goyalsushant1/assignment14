<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$query = "SELECT `employee_name`,`address`,`contact`,`date_of_birth`,`department`,`base_salary` FROM emp_details WHERE base_salary> (SELECT AVG(base_salary) from emp_details)";
$execute = $conn->prepare($query);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");
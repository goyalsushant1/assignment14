<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$current = Date('m/d');
// echo $current;
// die();
$query = "SELECT * FROM emp_details WHERE MONTH(date_of_birth)=MONTH(CURRENT_DATE()) AND DAYOFMONTH(date_of_birth)=DAYOFMONTH(CURRENT_DATE())";
$execute = $conn->prepare($query);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");

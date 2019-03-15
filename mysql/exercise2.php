<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$month = date('F');
$query = "SELECT AVG(salary) FROM salary_details WHERE `month` = '{$month}'";
$execute = $conn->prepare($query);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");
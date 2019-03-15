<?php

ini_set('display_errors',1);
include_once('../insertdata/dbconfig.php');
$current = Date('m/d');
// echo $current;
// die();
$innerjoin = "SELECT * FROM emp_details CROSS JOIN salary_details";
$execute = $conn->prepare($innerjoin);
$execute->execute();
$res=$execute->fetchAll(PDO::FETCH_ASSOC);
print("<pre>".print_r($res,true)."</pre>");

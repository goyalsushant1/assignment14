<?php

include_once('dbconfig.php');
session_start();
$empid = $_SESSION['EMP_ID'];
$month = $_POST['month'];
$salary = $_POST['salary'];

if(!isset($month)&&!isset($salary))
{
    echo 'Please fill out the fields';
    die();
}

$query = "INSERT INTO
salary_details(
  `employee_id`,
  `month`,
  `salary`
)
VALUES('{$empid}','{$month}','{$salary}')";
$execute = $conn->prepare($query);
$execute->execute();

echo 'Records added successfully <br>';
echo 'Add another salary for same employee <br> <a href="salary.php">Insert Here</a><br>';
echo 'Add another record <br> <a href="employee.html">Insert Here</a>';
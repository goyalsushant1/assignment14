<?php
ini_set('display_errors',1);
include_once('dbconfig.php');
session_start();
$empname = $_POST['empname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$date = $_POST['date'];
$dept = $_POST['dept'];
$joinmonth = $_POST['joinmonth'];
$basesalary = $_POST['basesalary'];

if(!isset($empname)&&!isset($address)&&!isset($contact)&&!isset($date)&&!isset($dept)&&!isset($joinmonth))
{
    echo 'Please fill out the fields';
    die();
}

$query = "INSERT INTO
emp_details(
  `employee_name`,
  `address`,
  `contact`,
  `date_of_birth`,
  `department`,
  `join_month`,
  `base_salary`
)
VALUES('{$empname}', '{$address}', '{$contact}', '{$date}','{$dept}','{$joinmonth}','{$basesalary}')";
$execute = $conn->prepare($query);
$execute->execute();

$query1 = "SELECT employee_id FROM emp_details WHERE contact = '{$contact}'";
$execute1=$conn->prepare($query1);
$execute1->execute();
$res=$execute1->fetch(PDO::FETCH_ASSOC);
$_SESSION['EMP_ID']=$res['employee_id'];

echo 'Records added successfully <br>';
echo 'Add salary for this record <br> <a href="salary.php">Insert Here</a>';
<?php

require 'vendor/autoload.php';

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$database = new MongoDB\Database($manager, 'Bootcamp');
echo "Database Created!! <br>";
$database->createCollection('mongo');
echo "Collection is now added to the database";

?>

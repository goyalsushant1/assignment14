<?php

ini_set('display_errors',1);

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$id=new MongoDB\BSON\ObjectId('5c89d79b3e452b05f330a53f');
$query = new MongoDB\Driver\Query(['_id'=>$id]);
$execute = $manager->executeQuery('Bootcamp.mongo', $query);

foreach ($execute as $document) {
print("<pre>".print_r($document,true)."</pre>");
}

?>
<?php

ini_set('display_errors',1);

$bulk = new MongoDB\Driver\BulkWrite;
$id=new MongoDB\BSON\ObjectId('5c89d79b3e452b05f330a540');
$bulk->delete(['_id' => $id]);
// $bulk->delete(['x' => 2], ['limit' => 0]);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('Bootcamp.mongo', $bulk);

print("<pre>".print_r($result,true)."</pre>");

?>
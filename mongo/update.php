<?php

ini_set('display_errors',1);


$bulk = new MongoDB\Driver\BulkWrite;

$id=new MongoDB\BSON\ObjectId('5c89d79b3e452b05f330a542');

$bulk->update(
    ['_id' => $id],
    ['$set' => ['name' => 'Rishabh']],
    ['multi' => false, 'upsert' => false]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('Bootcamp.mongo', $bulk);

print("<pre>".print_r($result,true)."</pre>");


?>
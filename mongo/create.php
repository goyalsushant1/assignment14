<?php

ini_set('display_errors',1);

$bulk = new MongoDB\Driver\BulkWrite;

$document1 = ['title' => 'one','name'=>'Sushant','age'=>21];
$document2 = ['title' => 'two','name'=>'Ajay','age'=>24];
$document3 = ['title' => 'three','name'=>'Nishant','age'=>22];
$document4 = ['title' => 'four','name'=>'Rishanbh','age'=>23];

$_id1 = $bulk->insert($document1);
$_id2 = $bulk->insert($document2);
$_id3 = $bulk->insert($document3);
$_id4 = $bulk->insert($document4);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('Bootcamp.mongo', $bulk);
print("<pre>".print_r($result,true)."</pre>");

?>
<?php

$singleindex = new \MongoDB\Driver\Command([
    'createIndexes' => 'mongo',
    'indexes' => [[
        'name' => '_id_',
        'key'  => ['age' => 1]
    ]]
]);

$instance = new \MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');
$instance->executeCommand('Bootcamp', $singleindex);
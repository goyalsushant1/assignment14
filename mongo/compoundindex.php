<?php

$compoundindex = new \MongoDB\Driver\Command([
    'createIndexes' => 'mongo',
    'indexes' => [[
        'name' => 'age_1_title_1',
        'key'  => ['age' => 1,'title'=>1]
    ]]
]);

$instance = new \MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');
$instance->executeCommand('Bootcamp', $compoundindex);
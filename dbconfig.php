<?php

require __DIR__.'/vendor/autoload.php';




use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('key.json')
    ->withDatabaseUri('https://tuss-2022-default-rtdb.asia-southeast1.firebasedatabase.app/');


    $database = $factory->createDatabase();

?>


<?php

$file = file_get_contents('./records.json');

$records = json_decode($file, true);
// var_dump($records);


?>
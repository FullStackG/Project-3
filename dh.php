<?php

print_r($_POST);

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_push($d, $_POST);

$d= json_encode($d);
file_put_contents('data.json', $d);

//print_r($d);

header('location:admin.php');

?>
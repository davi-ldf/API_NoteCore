<?php 
$db_host = '';
$db_name = 'notecore';
$db_user = '';
$db_pass = '';
//Don't forget to fill your host, user and password. 

$pdo = new PDO ("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [];

$array = [
    'error' => '',
    'result' => []
];
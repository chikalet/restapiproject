<?php
header('Content-Type: application/json');
$url = $_SERVER['REQUEST_URI'];
$ur = explode('/', $url);
$nameMethod = $ur[2];


if ($nameMethod == 'notebook'){
    require '../API/notebook.php';
    die();
}

$ok = array('fail' => 1);
echo json_encode($ok);



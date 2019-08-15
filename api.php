<?php

require_once('vendor/autoload.php');

$cutter = new CutterGen\CutterGen;
$name = !empty($_GET['name']) ? $_GET['name'] : null;
$length = !empty($_GET['length']) ? $_GET['length'] : null;

if ($name) {
    $length = $length && is_numeric($length) ? intval($length) : $length;
    echo json_encode([
        'name' => $cutter->name($name),
        'length' => $cutter->length($length),
        'cutter' => $cutter->generate()
    ]);
} else {
    header("HTTP/1.0 400 Bad Request", true, 400);
    echo json_encode("Missing required parameter 'name'");
}

<?php
require_once('src/CutterGen.php');
$cutter = new CutterGen;
$output = ['cutter' => null, 'length' => 2, 'name' => null];
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $cutter->name($_POST['name']);
    $cutter->length($_POST['length'] ? $_POST['length'] : strlen($cutter->name));
    echo json_encode(['cutter' => $cutter->generate()]);
} else {
    header("HTTP/1.0 400 Bad Request");
    die();
}
?>
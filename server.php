<?php
$discs_json = file_get_contents("dischi.json");
$discs = json_decode($discs_json, true);
$response = $discs;

header('Content-Type: application/json');
echo json_encode($response);
?>
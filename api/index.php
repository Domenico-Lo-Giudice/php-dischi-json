<?php

$source_url = __DIR__ . '/../data.json';

$data_json = file_get_contents($source_url);

$array = json_decode($data_json, true);

$discs = $array;

header('Content-Type: application/json');
echo json_encode($discs);

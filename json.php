<?php
error_reporting(0);
ini_set('display_errors', 0);
$login = $_GET["login"];
$symbol = $_GET["symbol"];
$date = $_GET["date"];
$macserial = $_GET["serial"];
$TimeServer = $_GET["TimeServer"];
header('Content-Type: application/json');
$data = [];

$data = [
	"5120419" => "",
	
];

$dataExport = [];
if(in_array($login, $data) && $data[$login] == $macserial){
	$dataExport = $data[$login];
}

echo json_encode($dataExport);
<?php
$login = $_GET["login"];
$symbol = $_GET["symbol"];
$date = $_GET["date"];
$TimeServer = $_GET["TimeServer"];
header('Content-Type: application/json');
$data = [];

$data["29102019"]["XAUUSD"] = [
	"buy" => "",
	"sell" => "price:1501,tp:1485,sl:1505",
	"minmax" => "1485-1501"
];
$dataExport = [];
$dataExport = $data[$date][$symbol];
if($TimeServer){
	file_put_contents(__DIR__."/date.txt", $TimeServer);
}
echo json_encode($dataExport);
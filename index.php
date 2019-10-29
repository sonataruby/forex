<?php
$login = $_GET["login"];
$symbol = $_GET["symbol"];
$date = $_GET["date"];
header('Content-Type: application/json');
$data = [];

$data["29102019"]["XAUUSD"] = [
	"buy" => "",
	"sell" => "price:1501,tp:1485,sl:1505",
	"minmax" => "1485-1501"
];
$dataExport = [];
$dataExport = $data[$date][$symbol];
echo json_encode($dataExport);
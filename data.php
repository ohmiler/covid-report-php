<?php 

$jsondata = file_get_contents('https://covid19.th-stat.com/api/open/today');

$arr = json_decode($jsondata, true);
$data = array();

foreach ($arr as $row) { 
    $data[] = $row;
}

echo json_encode($data);


?>
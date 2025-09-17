<?php
$mahasiswa  = [
    "nama" => "Syanadhi Majid",
    "umur" => 22,
    "npm"  => "21122412",
    "lulus"=> false
];

$data = json_encode($mahasiswa);
echo $data;
?>
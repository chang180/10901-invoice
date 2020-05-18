<?php
include_once("./com/base.php");

// 製造一些資料，已供功能查詢

$num=1000;

$char=["A","B","C","D","E","F","G","Z","Y","X","W","V","U"];


for($i=0;$i<$num;$i++){
    $code=$char[rand(0,11)].$char[rand(0,11)];
    $data=[
        'period'=>rand(1,6),
        'year'=>rand(2020,2022),
        'code'=>$code,
        'number'=>rand(10000000,99999999),
        'expense'=>rand(100,10000),
    ];
    echo "已新增",$data["code"],$data["number"],"<br>";

    save("invoice",$data);
}
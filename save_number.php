<?php

include_once "./com/base.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";


// 年份 -> year
// 期數 -> period
// 特別獎 -> num1
// 特獎  -> num2 可能有多筆
// 頭獎 -> num3 可能有多筆
// 增開六獎 -> num4 可能有多筆，而且只有三碼 

$table="award_number";

$year=$_POST['year'];
$period=$_POST['peroid'];

// 儲存特別獎
$num1=$_POST['num1'];
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num1,
    "type"=>1,
];

save($table,$data);

$num2=$_POST['num2'];
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num1,
    "type"=>2,
];

save($table,$data);
foreach($num3 as $num){
$num3=$_POST['num3'];
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num1,
    "type"=>3,
];
save($table,$data);
}
$num4=$_POST['num4'];
foreach($num4 as $num){
$data=[
    "year"=>$year,
    "period"=>$period,
    "number"=>$num1,
    "type"=>4,
];

save($table,$data);
}



to("invoice.php");

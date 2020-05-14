<?php include "./com/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "./include/header.php";
    $period = ceil(date('n', time()) / 2);
    if (isset($_GET['period'])) {
        $period = $_GET['period'];
    }

    // 如何設定當前月顏色：
    // if($period==1){
    //     echo 'green';
    // }else{
    //     echo 'white';
    // }
// 可用三元運算子簡化：
// ($period==1)?"green":"white";

    ?>

    <h1>發票列表</h1>
    <ul class="nav">
        <li><a href='list.php?period=1' style="background:<?=($period==1)?'lightgreen':'white';?>">(1,2)</a></li>
        <li><a href='list.php?period=2' style="background:<?=($period==2)?'lightgreen':'white';?>">(3,4)</a></li>
        <li><a href='list.php?period=3' style="background:<?=($period==3)?'lightgreen':'white';?>">(5,6)</a></li>
        <li><a href='list.php?period=4' style="background:<?=($period==4)?'lightgreen':'white';?>">(7,8)</a></li>
        <li><a href='list.php?period=5' style="background:<?=($period==5)?'lightgreen':'white';?>">(9,10)</a></li>
        <li><a href='list.php?period=6' style="background:<?=($period==6)?'lightgreen':'white';?>">(11,12)</a></li>

    </ul>

    <?php


    $sql = "SELECT * FROM invoice WHERE period='$period'";
    $rows = $pdo->query($sql)->fetchAll();


    ?>
    <table>
        <tr>
            <td>編號</td>
            <td>標記</td>
            <td>號碼</td>
            <td>花費</td>
        </tr>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['code']; ?></td>
                <td><?= $row['number']; ?></td>
                <td><?= $row['expense']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php">回首頁</a>

</body>

</html>
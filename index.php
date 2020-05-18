<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css"> -->
    <style>
        /* body {
            min-width: 60vw;
            min-height: 50vh;

        } */
    </style>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <form action="save_invoice.php" method="post">
        <div class="form-group">
            <label for="period"> 期別：</label>
            <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>
            </select>
            <label for="year"> 年份：</label>
            <select name="year">
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
            <div class="form-group">
                <label for="number"> 獎號：</label>
                <input type="text" name="code">
                <input type="number" name="number">
            </div>
            <label for="expense"> 花費：</label>
            <input type="number" name="expense">
            <input type="submit" valut="儲存">
        </div>
    </form>
</body>

</html>
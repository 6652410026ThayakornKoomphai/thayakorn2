<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ผลการคำนวณ</h1>
    <hr>
    <?php
    if( empty($_GET['num1']) == true || empty($_GET['num2']) == true){
        echo 'คำนวณไม่ได้ กรุณาป้อนข้อมูลใหม่';     
        header('refresh:3; url=dti05.php');
        exit;

    }else if(floatval($_GET['num1']) == 0 || intval($_GET['num2']) == 0){
        echo 'กรุณาป้อนข้อมูลใหม่';
        header('refresh:3; url=dti05.php');
        exit;
    }else{
        $result = $_GET['num1'] / $_GET['num2'];
        echo 'เงินคนละ'. $_GET['num1'] . 'บาท' . '<br/>';
        echo 'คน' . $_GET['num2'] . 'คน' . '<br/>';
        echo 'เงินที่ได้คนละ' . $result . 'บาท';
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{padding: 40px;}
    </style>
</head>
<body>
    <h1 style="text-align :center">
        Result from DTI06.php<br>
    </h1>
    <hr>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
    ?>
    <div>
        <strong>ชื่อ-นามสกุล: </strong>
        <?php echo  empty($_GET['fname']) ? 'ไม่พบข้อมูล' : $_GET['fname']; ?>
    </div>
    <div>
        <strong>รหัสผ่าน: </strong>
        <?php echo  empty($_GET['pword']) ? 'ไม่พบข้อมูล' : $_GET['pword']; ?>
    </div>
        <div>
        <strong>อายุ: </strong>
        <?php echo  empty($_GET['age']) ? 'ไม่พบข้อมูล' : $_GET['age']; ?>
        <strong>ปี</strong>
    </div>
        <div>
        <strong>เพศ: </strong>
        <?php echo  empty($_GET['gender']) ? 'ไม่พบข้อมูล' : $_GET['gender']; ?>
    </div>
        <div>
        <strong>ภาษาโปรแกรมที่ชอบ: </strong>
        <?php echo  empty($_GET['plang']) ? 'ไม่พบข้อมูล' : implode(', ', $_GET['plang']) ; ?>
    </div>
    <div>
        <strong>อาหารที่ชอบ: </strong>
        <?php
            if(empty($_GET['food1']) == true && empty($_GET['food2']) == true && empty($_GET['food3']) == true && empty($_GET['food4']) == true){
                echo '-';
            }
            echo  isset($_GET['food1']) ? $_GET['food1'] :  ''; 
            echo  isset($_GET['food2']) ? $_GET['food2'] :  '';
            echo  isset($_GET['food3']) ? $_GET['food3'] :  '';
            echo  isset($_GET['food4']) ? $_GET['food4'] :  '';
        ?>
    </div>
    <div>
        <strong>ประเทศที่ชอบ: </strong>
        <?php echo  empty($_GET['country']) ? 'ไม่พบข้อมูล' : $_GET['country']; ?>
    </div>
    <div>
        <strong>จังหวัดที่ชอบ: </strong>
        <?php echo  empty($_GET['province']) ? 'ไม่พบข้อมูล' : $_GET['province']; ?>
    </div>
    <div>
        <strong>วันเกิด: </strong>
        <?php echo  empty($_GET['bdate']) ? 'ไม่พบข้อมูล' : $_GET['bdate']; ?>
    </div>
    <div>
        <strong>ระดับความชอบ: </strong>
        <?php echo  empty($_GET['linklevel']) ? 'ไม่พบข้อมูล' : $_GET['linklevel']; ?>
    </div>
    <div>
        <strong>ความคิดเห็น: </strong>
        <?php echo  empty($_GET['comment']) ? 'ไม่พบข้อมูล' : $_GET['comment']; ?>
    </div>


    <?php
    }else{
        echo 'ประมวลผลข้อมูลได้ ไม่ต้องกรุณาลองใหม่่';
    }
    ?>
</body>
</html>
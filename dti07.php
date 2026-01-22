<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{padding: 40px;}
        .form-group{
            margin-bottom: 20px;
            padding-bottom: 10px;}
        input[type='text'],input[type='password'],input[type='number'],select,textarea{width: 100%; padding:5px}
        label{display: block; margin-bottom: 2.5px;}
        input[type='text'],input[type='password'],input[type='number'],select,textarea{width: 100%; padding:5px}
        input[type='submit']{background-color: blue; color:white; padding: 5px 20px; cursor: pointer; border-radius: 5px; border: none;}
        input[type='reset']{background-color: red; color:white; padding: 5px 20px; cursor: pointer; border-radius: 5px; border: none;}
    </style>
    
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP 2026</h1>
    <hr>
    <!-- method -> GET/POST/PUT/DELETE -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="POST" enctype="">
        <div class="form-group">
            <label for="fname">ชื่อ-นามสกุล</label>
            <input type="text"  id="name" name="fname" >
        </div>
        <div class="form-group">
            <label for="pword">รหัสผ่าน</label>
            <input type="password"  id="password" name="pword" >
        </div>
        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number"  id="age" name="age" >
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" name="gender" value="male" >ชาย
            <input type="radio" name="gender" value="female" >หญิง
            <input type="radio" name="gender" value="LGBTQ+" >LGBTQ+
        </div>
        <div class="form-group">
            <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
            <input type="checkbox" name="plang[]" value="C" >C
            <input type="checkbox" name="plang[]" value="JAVA" >JAVA 
            <input type="checkbox" name="plang[]" value="PYTHON" >PYTHON
            <input type="checkbox" name="plang[]" value="PHP" >PHP
        </div>
        <div class="form-group">
            <label for="food">อาหารที่ชอบ</label>
            <input type="checkbox" name="food1" value="KFC" >KFC
            <input type="checkbox" name="food2" value="Pizza" >Pizza 
            <input type="checkbox" name="food3" value="Donut" >Donut
            <input type="checkbox" name="food4" value="Burger" >Burger
        </div>
        <div class="form-group">
            <label for="country">ประเทศที่ชอบ</label>
            <select name="country" id="country">
                <option value="">------ กรุณาเลือกประเทศ ------</option>
                <option value="Japan">Japan</option>
                <option value="Thailand">Thailand</option>
                <option value="USA">USA</option>
                <option value="China">China</option>
                <option value="Korea">Korea</option>
            </select>
        </div>
        <div class="form-group">
            <label for="province">จังหวัดที่ชอบ</label>
            <select name="province" id="province" size='4'>
                <option value="เชียงใหม่">เชียงใหม่</option>
                <option value="เชียงราย">เชียงราย</option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                <option value="ภูเก็ต">ภูเก็ต</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bdate">วันเกิด</label>
            <input type="date" name="bdate" id="bdate">
        </div>
        <div class="form-group">
            <label for="linklevel">ระดับความชอบ</label>
            <input type="range" name="linklevel" id="linklevel" min="0" max="100" value="50" 
                    oninput="document.POSTElementById('showValue').innerText = this.value">
            <span id="showValue">50</span>
        </div>
        <div class="form-group">
            <label for="comment">ความคิดเห็น</label>
            <textarea name="comment" id="comment" cols='30' rows='5'></textarea>
        </div>
        <!-- hidden input -->
         <input type="hidden" name="message" value="I hate You">
         <!-- ------------------------------ -->
        <div class="form-group">
            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ล้างข้อมูล">
        </div>
    </form>
    <hr>
    <!-- แสดงข้อมูลที่ส่งจากฟอร์ม ที่ส่งมาจากไฟล์ตัวเอง   -->
         <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    ?>
    <div>
        <strong>ชื่อ-นามสกุล: </strong>
        <?php echo  empty($_POST['fname']) ? 'ไม่พบข้อมูล' : $_POST['fname']; ?>
    </div>
    <div>
        <strong>รหัสผ่าน: </strong>
        <?php echo  empty($_POST['pword']) ? 'ไม่พบข้อมูล' : $_POST['pword']; ?>
    </div>
        <div>
        <strong>อายุ: </strong>
        <?php echo  empty($_POST['age']) ? 'ไม่พบข้อมูล' : $_POST['age']; ?>
        <strong>ปี</strong>
    </div>
        <div>
        <strong>เพศ: </strong>
        <?php echo  empty($_POST['gender']) ? 'ไม่พบข้อมูล' : $_POST['gender']; ?>
    </div>
        <div>
        <strong>ภาษาโปรแกรมที่ชอบ: </strong>
        <?php echo  empty($_POST['plang']) ? 'ไม่พบข้อมูล' : implode(', ', $_POST['plang']) ; ?>
    </div>
    <div>
        <strong>อาหารที่ชอบ: </strong>
        <?php
            if(empty($_POST['food1']) == true && empty($_POST['food2']) == true && empty($_POST['food3']) == true && empty($_POST['food4']) == true){
                echo '-';
            }
            echo  isset($_POST['food1']) ? $_POST['food1'] :  ''; 
            echo  isset($_POST['food2']) ? $_POST['food2'] :  '';
            echo  isset($_POST['food3']) ? $_POST['food3'] :  '';
            echo  isset($_POST['food4']) ? $_POST['food4'] :  '';
        ?>
    </div>
    <div>
        <strong>ประเทศที่ชอบ: </strong>
        <?php echo  empty($_POST['country']) ? 'ไม่พบข้อมูล' : $_POST['country']; ?>
    </div>
    <div>
        <strong>จังหวัดที่ชอบ: </strong>
        <?php echo  empty($_POST['province']) ? 'ไม่พบข้อมูล' : $_POST['province']; ?>
    </div>
    <div>
        <strong>วันเกิด: </strong>
        <?php echo  empty($_POST['bdate']) ? 'ไม่พบข้อมูล' : $_POST['bdate']; ?>
    </div>
    <div>
        <strong>ระดับความชอบ: </strong>
        <?php echo  empty($_POST['linklevel']) ? 'ไม่พบข้อมูล' : $_POST['linklevel']; ?>
    </div>
    <div>
        <strong>ความคิดเห็น: </strong>
        <?php echo  empty($_POST['comment']) ? 'ไม่พบข้อมูล' : $_POST['comment']; ?>
    </div>


    <?php
    }else{
        echo 'ประมวลผลข้อมูลไม่ได้ กรุณาลองใหม่่';
    }
    ?>

</body>
</html>
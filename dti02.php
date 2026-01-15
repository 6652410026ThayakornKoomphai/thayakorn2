<?php
    //Single comment
 
    /*
        Multi-lien
        comment
    */
 
    //Variable
    $data = "ABCDE";    //String
    $data_char = 'C';   //Character
    $dataWow = 123124;
    $data_ieie = true;
    $data_array = [10, 20, 30, 40, 50];   //Array
 
    //Output Statement on Browser
    echo "Chanintorn<br/>";
    echo 123456789 . "<br/>";
    echo $data . "<br/>";
    echo 'Y' . "<br/>";
    echo ($data_array[1] + $data_array[3]) . "<br/>";
   
    $fname = "Sombat";
    $lname = "Somjai";
?>
 
<hr/>
 
<?php
    echo "สวัสดี $fname $lname<br/>";
    echo "สวัสดี " . $fname . " " . $lname . "<br/>"; //แนะนำแบบนี้นะ
?>
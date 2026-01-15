<?php
    //function
    //no parameter no return
    function greet() {
        echo "<h1 style='color:red'>Hello everyone!<br/></h1>";
    }
    
    greet();
    greet();

    //have parameter no return
    function welcome($fname, $name) {
        echo 'ยินดีต้อนรับคุณ ' . $fname . ' ' . $name . '<br/>';
        echo "<br/>";
    }

    welcome("Mr.", "Sombat");
    welcome("Mr.", "Somjai");
    welcome("Mr.", "Somchai");

    //no parameter has return
    function sendBye(){
        echo "สวัสดีครับทุกคน<br/>";
        return "Bye Bye Everyone<br/>";
    }
    echo sendBye();
    $data = sendBye();
    echo "<br/>" . $data . "DTI-SAU";

    //have parameter has return
    function sumNumber($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }
    echo "<br/><br/> 100+200 =" . sumNumber(100, 200);

    //Arrow Function (เขียนในรูปแบบที่เรียก Expression Function)
    $woo = fn() => "<br/> woo woo woo";
    echo $woo();

    $hi = fn($name) => "<br/> Hi " . $name;

    echo $hi('bat');
?>
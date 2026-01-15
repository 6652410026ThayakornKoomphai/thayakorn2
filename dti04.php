<?php
    //Array
    //Indexed Array
            //0  1   2   3   4
    $dataA = [10, 20, 30, 40, 50];
    $dataB = array(60, 70, 80, 90, 100);
    $dataC = ['a', 'b', 'c', 'd', 'e'];

    echo $dataA[2] . "<br/>";
    echo $dataB[4] . "<br/>";
    echo $dataC[0] . "<br/>";

    $faculty = ['as' => 'Art and Sci', 'en' => 'Engineering', 'ed' => 'Education'];
    $subject = array('th' => 'Thai', 'en' => 'English', 'ma' => 'Math');

    echo $faculty['en'] . "<br/>";
    echo $subject['ma'] . "<br/>";
?>
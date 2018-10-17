<?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    // $hobby = implode(",",$_POST["hobby"]);
    $hobbys = $_POST["hobby"];

    echo "<ul>";
    echo "<li>姓名:".$name."</li>";
    echo "<li>信箱:".$mail."</li>";
    echo "<li>學歷:".$edu."</li>";
    echo "<li>性別:".$gender."</li>";
    // echo "<li>興趣:".$hobby."</li>";
    foreach($hobbys as $hobby){
        echo $hobby;
    }
    echo "</ul>";

?>
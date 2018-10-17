<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // $score =75;
        // if($score>80){
        //     echo "good";
        // }elseif($score>60){
        //     echo "及格";
        // }else{
        //     echo "不及格";
        // }
        $score =90;
        switch($score){
            case 10:
                echo "10";
                break;
            case 20:
                echo "20";
                break;
            case 30:
                echo "30";
                break;
            case "HELLO";
                echo "HELLO";
            default:
                echo "default";
        }
        switch(true){
            case $score>80:
                echo "80";
                break;
            case $score < 80 :
                echo "小於";
                break;
        }
    ?>
</body>
</html>
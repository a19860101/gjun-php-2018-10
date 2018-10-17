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
        $a =["HTML","CSS","JAVASCRIPT","PHP","MySQL","ASP","SQLSERVER"];
        $text = "aaaa_bbbb_cccc_dddd";
        // $b = ["JOHN"=>"21","MARY"=>"18","MAX"=>"25"];
        // echo implode("_",$a);
        $ts = explode("_",$text);

        // foreach($ts as $t){
        //     echo $t."<br>";
        // }

        for($i=0;$i<count($ts);$i++){
            echo $ts[$i]."<br>";
        }

        // for($i=0;$i<100;$i++){
        //     echo "hello"."<br>";
        // }
        
        $a_nums = count($a);
        // echo $a_nums;
        // for($i=0;$i<$a_nums;$i++){
        //     echo $a[$i]."<br>";
        // }

        $fruits = ["APPLE","BANANA","PINEAPPLE","GRAPE"];
        foreach($fruits as $fruit){
            echo $fruit."<br>";
        }
    ?>
</body>
</html>
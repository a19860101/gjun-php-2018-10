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
        $text = "qwerty";
        echo md5($text)."<br>";
        echo sha1($text)."<br>";
        echo sha1(md5($text))."<br>";
        echo md5(md5($text))."<br>";
        echo md5(sha1($text))."<br>";
        echo sha1(sha1($text))."<br>";
    ?>
</body>
</html>
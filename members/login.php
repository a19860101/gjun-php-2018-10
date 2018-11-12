<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="auth.php" method="post">
        <div>
            <label>帳號</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label>密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="登入" name="submit">
            <input type="button" value="取消" onclick="history.back()">
        </div>
    </form>
</body>

</html>
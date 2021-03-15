<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>PDCAサイクルを回そう！</h1>
    <form action="pdca.php" method="post">
        <p>計画(Plan)<br><textarea name="p" class="plan" cols="50" rows="20"></textarea></p>
        <p>行動(Do)<br><textarea name="d" class="do" cols="50" rows="20"></textarea></p>
        <p>評価(Check)<br><textarea name="c" class="check" cols="50" rows="20"></textarea></p>
        <p>改善(Action)<br><textarea name="a" class="act" cols="50" rows="20"></textarea></p>
        <p><input type="submit" value="登録"></p>
    </form>

</body>
</html>
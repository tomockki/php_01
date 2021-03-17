
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

    <?php
        try {
            $db = new PDO('mysql:dbname=pdca;host=localhost;charset=utf8','tomo','tomockki@yahoo.co.jp');
            echo "接続OK！";
        } catch (PDOException $e) {
            echo 'DB接続エラー！: ' . $e->getMessage();
        }
    ?>

    <header>
        <h1>PDCAサイクルを回そう！</h1>
    </header>

    <section class = "form">
        <form action="pdca.php" method="post">
            <div class = "fp">計画(Plan)<br><textarea name="p" class="plan" cols="50" rows="20"></textarea></div>
            <div class = "fd">行動(Do)<br><textarea name="d" class="do" cols="50" rows="20"></textarea></div>
            <div class = "fc">評価(Check)<br><textarea name="c" class="check" cols="50" rows="20"></textarea></div>
            <div class = "fa">改善(Action)<br><textarea name="a" class="act" cols="50" rows="20"></textarea></div>
            <p><input type="submit" value="登録"></p>
        </form>
    </section>


</body>
</html>
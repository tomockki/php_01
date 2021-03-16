<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>あなたのPDCAサイクルは回った？</h1>
    </header>
    <section>
        <?php
            $p = $_POST["p"];
            $d = $_POST["d"];
            $c = $_POST["c"];
            $a = $_POST["a"];
        ?>
        
        <p><?=$p?></p>
        <p><?=$d?></p>
        <p><?=$c?></p>
        <p><?=$a?></p>
        <button type="button" onclick="history.back()">戻る</button>
    </section>
</body>
</html>
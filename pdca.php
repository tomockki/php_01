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
        <h1>あなたのPDCAサイクル</h1>
    </header>

    <?php
  try {
    $db = new PDO('mysql:dbname=pdca;host=localhost;charset=utf8','','');

    $p = $_POST['p'];
    $d = $_POST['d'];
    $c = $_POST['c'];
    $a = $_POST['a'];

    $pdca = $db->exec('INSERT INTO plan SET pla = "'.$p.'" do = "'.$d.'" che = "'.$c.'" act = "'.$a.'"');

    echo "<p>計画: ".$p."</p>";
    echo "<p>実行: ".$d."</p>";
    echo "<p>評価: ".$c."</p>";
    echo "<p>改善: ".$a."</p>";
    echo '<p>で登録しました。</p>';
  } catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  }

?>
</body>
</html>
<?php
mb_internal_encoding('utf8');
// 接続
$pdo = new PDO('mysql:dbname=lesson02;host=localhost;', 'root', 'root');

$sql = "insert into contactform(name, mail, age, comments) values(?,?,?,?)";
//prepare メゾットを使用し、作成したSQL分を変数に格納
$stmt = $pdo->prepare($sql);
//bindValue()メゾット　bindValue(n,’A’)sql文のvalueのn番目にAを設定
$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);
//executeメゾット　指定したデータベースのテーブルに対してSQL文が実行される
$stmt->execute();
?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問合せ確認フォーム</title>
  <link rel="stylesheet" type="text/css" href="./style2.css">
</head>
<body>
  <main>
  <h1>お問合せフォーム</h1>
    <div class="confirm">
      <p>
        お問合せありがとうございました。
        <br>3営業日内に担当者よりご連絡差し上げます。
      </p>
    </div>
  </main>
</body>
</html>
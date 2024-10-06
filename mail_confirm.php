<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問合せ確認フォーム</title>
  <link rel="stylesheet" type="text/css" href="./style2.css">
</head>
<body>
  <main>
    <h1>お問合せ内容確認</h1>
    <div class="confirm">
      <p>お問合せ内容はこちらでよろしいでしょうか？
      <br>よろしければ「登録する」ボタンを押してください。
      </p>
      <p>名前
        <br>
        <?php echo $_POST['name']; ?>
      </p>
      <p>メールアドレス
        <br>
        <?php echo $_POST['mail']; ?>
      </p>
      <p>年齢
        <br>
        <?php echo $_POST['age'].'歳'; ?>
      </p>
      <p>コメント
        <br>
        <?php echo $_POST['comments']; ?>
      </p>

      <div class="buttons">
        <form action="index.php">
            <input type="submit" class="button0" value="戻って修正する">
        </form>

        <form action="insert.php" method=post>
          <input type="submit" class="button1" value="登録する">
          <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
          <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
      </div>
    </div>
  </main>
</body>
</html>




<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_5challenge</title>
</head>
<!-- ５．自分の氏名について、バイト数と文字数を取得して、表示してください。 -->
<body>
  <form action="./4_5challenge.php" method="POST">
    バイト数検索：<input type="text" name="baito">
    <br>
    文字数検索　：<input type="text" name="mojisu">
    <input type="submit" name="btn" value="検索">
    <br><br>
  </form>

  <?php
  if(!empty($_POST['btn'])){
    if(!empty($_POST['baito']) && !empty($_POST['mojisu'])){
      $x = $_POST['baito'];
      $y = $_POST['mojisu'];
      echo  '『'.$x.'』'.'のバイト数は：';
      echo strlen($x).'バイトです。';
      echo '<br>';
      echo '『'.$y.'』'.'の文字数は　：';
      echo mb_strlen($y).'文字です';
    }
  }
  ?>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>insert_result.php</title>
</head>
  <body>

<!--
プロフィール用のDBに値を挿入。この際、現在時(年日時分)を組み込み関数で取得し、追加。
「以上の内容で登録しました。」とinsert_confirmのようにフォームで入力された値を表示
接続に失敗したときの表示などもカバーすること

-->

<?php
  //セッション開始
session_start();

echo '◼︎名前：'.'<br>'.$_SESSION['name'];
echo '<br>'.'<br>';

echo '◼︎生年月日：'.'<br>'.$_SESSION['year'];
echo $_SESSION['month'];
echo $_SESSION['day'];
echo '<br>'.'<br>';

echo  '◼︎種別：'.'<br>'.$_SESSION['job'];
echo '<br>'.'<br>';

echo '◼︎電話番号：'.'<br>'.$_SESSION['tell'];
echo '<br>'.'<br>';

echo '◼︎自己紹介：'.'<br>'.$_SESSION['introduction'];
echo '<br>'.'<br>';

?>

以上の内容で登録します。<br>


</body>

</html>

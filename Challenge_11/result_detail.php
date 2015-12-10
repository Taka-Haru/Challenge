<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>result_detail.php</title>
</head>
  <body>
<!--
クリックされた個人の詳細情報を表示
表示項目はDBカラムのすべての項目
ボタンとして「変更」、「削除」ボタンをページ下部に表示し、
それぞれupdate.php、delete.phpに遷移する。この際ユーザの情報を受け渡す。
-->

〜個人の詳細情報〜<br>

Aさんのカラム要素全件表示<br><br>


<!--変更か削除のボタン-->
<form action="./update.php" method="POST">
<input type="submit" name="update" value="変更"style="width:100px">
</form>

<form action="./delete.php" method="POST">
  <input type="submit" name="delete" value="削除"style="width:100px">
</form>


</body>

</html>

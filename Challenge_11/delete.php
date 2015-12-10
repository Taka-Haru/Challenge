<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>delete.php</title>
</head>
  <body>
    <!--
    result_detailで表示されていたレコードをまるまる削除する
対象のレコードの全データを表示したのちに、
「このレコードを本当に削除しますか？」という質問があり、
「はい」と「いいえ」が直リンクとして設置してある。
「はい」ならdelete_result.phpへ、そうでないならトップページへ遷移する
-->

  全件データの表示

  このレコードを本当に削除しますか？<br><br>

  <!--削除の最終確認ボタン-->
  <form action="./delete_result.php" method="POST">
  <input type="submit" name="yes" value="はい"style="width:100px">
</form><br>

  <form action="./index.php" method="POST">
    <input type="submit" name="no" value="いいえ"style="width:100px">
  </form>※トプページに戻ります
</body>

</html>

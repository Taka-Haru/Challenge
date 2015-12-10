<html>
  <head>
    <meta charset="UTF-8">
    <title>5_7_1challenge</title>
  </head>
  <body>
<!--
７．以下の機能を実装してください。
　
名前・性別・趣味を入力するページを作成してください。
また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
記録されたデータを初期値として表示してください。
※PHPと同時に、HTMLの知識が必要になります。
※入力フィールドの使い方を調べてみましょう。

配列を使ったやり方もあり。

-->

    <form action="5_7_2challenge.php" method="POST">
      名前<br>
      <input type="text" name="txtName">
      <br><br>
      <!--valueで初期値入れないと「5_7_2」に飛んでも「on」と表記される。←性別のところ(ラジオタグのみ)
      理由はよく分かってない-->
      性別<br>
      男<input type="radio" name="rdoGender" value="男"> <br>
      女<input type="radio" name="rdoGender" value="女"> <br>
      <br>
      趣味<br>
      <textarea name="mulText" rows="4" cols="40" value="趣味"></textarea><br>
      <!--送信ボタン-->
      <br>
      <input type="submit" name="btnSubmit" value="GO!!!!"style="width:250px">
    </form>


  </body>
</html>

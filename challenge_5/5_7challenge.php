<html>
  <head>
    <meta charset="UTF-8">
    <title>5_7challenge</title>
  </head>
  <body>
    <!--
    ７．以下の機能を実装してください。

    名前・性別・趣味を入力するページを作成してください。
    また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
    記録されたデータを初期値として表示してください。
    ※PHPと同時に、HTMLの知識が必要になります。
    ※入力フィールドの使い方を調べてみましょう。
    -->

  <?php session_start(); //再入力時用 ?>



<form action="./5_7challenge.php" method="POST">
  名前<br>
  <input type="text" name="txtName">
  <br><br>
  性別<br>
  男<input type="radio" name="rdo" value="男">
  女<input type="radio" name="rdo" value="女"><br>
    <input type="radio" name="rdo" value="" checked="checked" style="display:none;">
  <br>
  趣味・特技:<br>
  <textarea name="mulText" rows="4" cols="40"></textarea><br>
  <input type="submit" name="btnSubmit" value="GO!!!!" style="WIDTH:200px; HEIGHT:20px">
</form>


  </body>
</html>

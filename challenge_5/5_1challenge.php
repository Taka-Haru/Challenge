<html>
  <head>
    <meta charset="UTF-8">
    <title>5_1challenge</title>
  </head>
  <body>
<!--
１．以下の入力フィールドを持った入力データをPHPで処理できるHTMLを記述してください。
・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）
-->
    <form action="./5_2challenge.php" method="POST">
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

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>search</title>
</head>
  <body>
    <!--
    検索条件をフォームに記入してから検索できる
    値の渡し方はGETを使用
    -->
    〜検索〜
    <form action="./search_result.php" method="GET"><br>
      ◼︎名前<br>
      <input type="text" name="name"><br><br>

      ◼︎生年<br>
      <select name="year">
      <?php
      for($i=1950; $i<=2010; $i++):?>
      <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php endfor;?>
      </select><br><br>

      ◼︎種別<br>
      エンジニア <input type="radio" name="job" value="エンジニア"><br>
      　 営業　　<input type="radio" name="job" value="営業"><br>
      </select><br>

      <!--検索ボタン-->
      <input type="submit" name="btnSubmit" value="検索!!">
    </form>


  </body>
</html>

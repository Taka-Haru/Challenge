<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>insert</title>
</head>
  <body>

<!--プロフィールを入力できるフォームを設置
insert_confimから戻ってきた場合、
フォームや選択ボタンは入力済みになる
送信ボタン押下後はsearch_confirm.phpへと
データを渡しながら(SESSIONに再度格納)遷移
-->

〜ユーザー登録ページ〜<br>

<br>

<form action="./insert_confirm.php" method="POST">

◼︎名前:<br>
<input type="text" name="name"><br><br>


◼︎生年月日<br>
<select name="year">
<?php
for($i=1950; $i<=2010; $i++):?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor;?>
</select>
年
<select name="month">
<?php
for($i = 1; $i<=12; $i++):?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor;?>
</select>
月
<select name="day">
<?php
for($i = 1; $i<=31; $i++):?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor;?>
</select>
日<br><br>

◼︎種別<br>
エンジニア <input type="radio" name="job" value="エンジニア"><br>
　 営業　　<input type="radio" name="job" value="営業"><br>
</select><br>

◼︎電話番号<br>
<input type="text" name="tell"><br><br>

◼︎自己紹介<br>
<textarea name="introduction" rows=10 cols=50 style="resize:none" wrap="hard"></textarea><br>
<br>

<!--確認ボタン-->
  <input type="submit" name="btnSubmit" value="確認画面へ">
</form>




</body>

</html>

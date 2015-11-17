<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_6challenge</title>
</head>
  <body>
<?php
/*
６．５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加してください。
(ファイルアップロード機能を作成してください。)
*/

//サーバー側に保存する名前
   $file_name = 'upload.txt';


// アップロードされたファイルを移動する
   move_uploaded_file(
   $_FILES['usefile']['tmp_name'],$file_name);

//PHPの組み込み関数の一つ(授業資料P6.7)を使って、読み込み作業を行う
$file_txt = file_get_contents($file_name);      //一括取得

echo $file_txt;


?>

</body>

</html>

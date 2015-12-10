<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_8challenge</title>
</head>
  <body>
<?php

/*
課題8:課題1、課題2のユーザー定義箇所を含んだutil.phpを作成し、requireで呼び出して表示する
*/

  require "util.php";

  $profile = my_profile();
    foreach($profile as $value){
    echo $value;
    }
  echo '<br>';

  view_int(20);

?>

  </body>
</html>

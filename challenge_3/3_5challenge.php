<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_5challenge</title>
</head>
  <body>
<?php
/*
課題5:戻り値としてある人物の
id(数値),名前,生年月日、住所を返却し、受け取った後はid以外の値を表示する
*/

    function get_members(){
      $id=2;
      $name='豊臣秀吉';
      $birthday='2月6日';
      $add='尾張国';

      return array(
                1 => $id,
                2 => $name,
                3 => $birthday,
                4 => $add
      );
    }

    $profile =  get_members();
    foreach($profile as $key => $value){
      if($key == 1){
        continue;
      }else
        echo $value.'<br>';
    }
?>
</body>

</html>

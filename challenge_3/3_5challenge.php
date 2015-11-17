<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php
/*
課題5:戻り値としてある人物の
id(数値),名前,生年月日、住所を返却し、受け取った後はid以外の値を表示する
*/

    function get_members(){
      echo "天下統一してみました！！<br>";

      $id=2;$name='豊臣秀吉';$birth='2月6日';$add='尾張国';
      return array('A'=>$id,'B'=>$name,'C'=>$birth,'D'=>$add);
    }

    $yobidashi =  get_members();
    foreach($yobidashi as $key => $value){
      if($key == 'A'){
        continue;
      }else
        echo "$value<br>";
      }
?>
</body>

</html>

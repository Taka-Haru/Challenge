<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_6challenge</title>
</head>
  <body>

<!-- 課題6:引き数に1つのid(数値)をとり、
3人分のプロフィール(項目は課題5参照)をあらかじめ関数内で定義しておく。
引き数のid値により戻り値として返却するプロフィールを誰のものにするか選択する。
それ以降などは課題5と同じ扱いに -->


<?php

function get_members($id){

    $a = array("1<br>","織田信長<br>","6月23日<br>","姫路<br>");
    $b = array("2<br>","豊臣秀吉<br>","2月6日<br>","大阪<br>");
    $c = array("3<br>","徳川家康<br>","1月31日<br>","東京<br>");

    $profile = array($a, $b, $c);
    return $profile[$id-1];
}

  $yobidashi = get_members(1);
  foreach($yobidashi as $key => $value){
      if($key==0){
      continue;
      }
      echo $value;
  }
?>
<!-- ※foreach文の所はfor文でも同じ処理は可能
      for($i=0;$i<3;$i++){
      $A = $yobidashi[$i];
      echo $A; -->
</body>

</html>

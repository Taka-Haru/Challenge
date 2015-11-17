<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php
/*
課題6:引き数に1つのid(数値)をとり、
3人分のプロフィール(項目は課題5参照)をあらかじめ関数内で定義しておく。
引き数のid値により戻り値として返却するプロフィールを誰のものにするか選択する。
それ以降などは課題5と同じ扱いに
*/

function get_members($id){

  $sengoku = array(
        1 => array("織田信長<br>","6月23日<br>","姫路<br>"),
        2 => array("豊臣秀吉<br>","2月6日<br>","大阪<br>"),
        3 => array("徳川家康<br>","1月31日<br>","東京<br>"),
        );
  return $sengoku[$id];
}
  $yobidashi = get_members(3);
  foreach($yobidashi as $value){
    echo $value;
  }

/*  foreach文でもfor文でも同じ処理は可能
for($i=0;$i<3;$i++){
  $A = $yobidashi[$i];
  echo $A;
}
*/

?>
</body>

</html>

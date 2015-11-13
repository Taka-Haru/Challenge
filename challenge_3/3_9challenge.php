<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php
/*
課題9:課題6の3人分のプロフィールのうち1人だけ住所が値nullの状態で定義し、
      foreachで全員分のプロフィールをid以外表示する処理を実行する。
      この際、歯抜けになっているデータはcontinueで飛ばす
*/

function get_members(){

  $sengoku = array(
        1 => array(1,"織田信長<br>","6月23日<br>",null.'<br>'),
        2 => array(2,"豊臣秀吉<br>","2月6日<br>","尾張国<br>"),
        3 => array(3,"徳川家康<br>","1月31日<br>","三河国<br>"),
        );
  return $sengoku;

}

  $yobidashi = get_members();
foreach($yobidashi as $value){
  foreach($value as $key => $nakami){
    if($key == 0||$nakami == null){
      continue;
  }
  echo $nakami;
}
}

?>
</body>

</html>

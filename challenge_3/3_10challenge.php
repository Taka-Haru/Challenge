<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
課題10:先に$limit=2を定義しておき、
課題9の処理のうち2人目($limitで定義した値の人数)まででforeachのループを抜けるようにする
*/

function get_members(){

  $sengoku = array(
        "A" => array(1,"織田信長<br>","6月23日<br>",null.'<br>'),
        "B" => array(2,"豊臣秀吉<br>","2月6日<br>","尾張国<br>"),
        "C" => array(3,"徳川家康<br>","1月31日<br>","三河国<br>"),
        );
  return $sengoku;
}


$yobidashi = get_members();
$limit = 2;

  foreach($yobidashi as $value){          //$valueに一人分の情報が入っている

    foreach($value as $key => $nakami){   //$nakamiには要素一個文　(名前等)が入っている
      if($key == 0 || $nakami == null){   //こっから
        continue;
      }
      echo $nakami;                       //ここは課題9の処理と同じ
}                                         //外側の配列(A,B,C)が回る順番と$limitに指定されている数値が等しい時にループを抜けたい
    if($limit ==  $value[0]){             //一人文の情報が入っている$valueの配列の中身０番目が$limitと同じになったら抜ける条件式
      break;
      }
}

?>
</body>

</html>

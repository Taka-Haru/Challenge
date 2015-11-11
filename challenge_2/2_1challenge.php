<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
    <?php
      const LINE_BREAK = '<br>';

/*１．switch文を利用して、以下の処理を実現してください。
値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理*/

    $num = 1;
    switch($num){
      case 1:
        echo 'one。<br/>';
        break;
      case 2:
        echo 'two<br/>';
        break;
      defualt:
        echo '想定外<br/>';
        break;
    }
    echo '<br>';
/*２．swtich文を利用して、以下の処理を実現してください。
　値が’A’なら「英語」、値が’あ’なら「日本語」、それ以外は何も表示しない処理*/

    $lang = 1;
    switch($lang){
      case 1:
        echo '英語<br/>';
        break;
      case 2:
        echo '日本語<br/>';
        break;
    }
    echo '<br>';

//３．for文を利用して、8を20回掛ける処理を実現してください。
    for($i=1; $i<=20; $i++){
      echo $i*8 .', ';              //カンマorスペースで区切る
    }
    echo '<br>';
    echo '<br>';


//４．for文を利用して、’A’を30個連結する処理を実現してください。

    $kakeru = 'A';
      for($i=0; $i<30; $i++){
        $kakeru = $kakeru.'A';
      }
      echo  $kakeru;
      echo '<br>';
      echo '<br>';

//５．for文を利用して、0から100を全部足す処理を実現してください。
  $sum = 0;
    for($i=0; $i<=100; $i++){
      $sum+=$i;
    }
    echo $sum;

    echo '<br>';
    echo '<br>';

/*６．while文を利用して、以下の処理を実現してください。
　　　　1000を2で割り続け、100より小さくなったらループを抜ける処理*/

    $x = 1000;
      while($x>100){
      $x/=2;
    }
    echo $x;

    echo '<br>';
    echo '<br>';

/*７．以下の順番で、要素が格納された配列を作成してください。
　　　　10, 100, ‘soeda’, ‘hayashi’, -20, 118, ‘END’ */

    $data = array(10,100,'soeda','hayashi',-20,118,'END');
    echo $data[6];
    echo '<br>';
    echo '<br>';

/*８．７で作成した配列の’soeda’を33に変更してください。 */

    $data[2] = 33;
    echo $data[2];
    echo '<br>';
    echo '<br>';

/*９．以下の順で、連想配列を作成してください。      //部屋番号と混在
　　　　1に’AAA’, ‘hello’に’world’, ‘soeda’に33, 20に20 */

      $arr = array(
            1 => 'AAA',
            'hello' => 'world',
            'soeda' => 33,
            20 => 20,
      );
      echo $arr[1];
      echo '<br>';
      echo '<br>';


?>

    </body>

</html>

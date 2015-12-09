<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_9challenge</title>
</head>
  <body>
    『1』『hello』『soeda』『20』のどれかを入力
    <br><br>
  <form action="http://localhost/develop/challenge2/2_9challenge.php" method="POST">
    <input type="text" name="num" size="10" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')">
    <input type="submit" name="btn" value="連想配列">
  </form>
    <br><br>
  </form>

  <?php

    /*
    ９．以下の順で、連想配列を作成してください。      ※部屋番号と混在
    　　1に’AAA’, ‘hello’に’world’, ‘soeda’に33, 20に20
    */
    $arr = array(
            1 => 'AAA',
      'hello' => 'world',
      'soeda' => 30,
           20 => 20
    );

    if(!empty($_POST['btn'])){
      $x = $_POST['num'];
      foreach($arr as $key => $value){
        if($x == $key){
          echo $arr[$x];
          break;
        }
      }
        if($x != $key){
          echo '上記の４つのどれかを入力して下さい。';
        }
    }

  ?>

  </body>
</html>

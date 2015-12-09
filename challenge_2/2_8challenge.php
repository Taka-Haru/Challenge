<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_8challenge</title>
</head>
  <body>
    ２番目に『33』が格納されていれば成功です。
    <br><br>
  <form action="http://localhost/develop/challenge2/2_8challenge.php" method="POST">
    <input type="text" name="num" size="5" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')">
    <input type="submit" name="btn" value="配列">
  </form>
    <br><br>
  </form>

  <?php

    if(!empty($_POST['btn'])){
      $data = array(10,100,'soeda','hayashi',-20,118,'END');
      $data[2] = 33;
      $x = $_POST['num'];
      $y = 0;
      while($x != $y){
        $y = $y + 1;
      }
      if($x <= 6){
          echo $x.'番目は、'.$data[$y].'が入ってます。';
        }else{
        echo '０〜６を入力してください';
      }
    }


  ?>

  </body>
</html>

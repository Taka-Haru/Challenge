<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_3challenge</title>
</head>
  <form action="./3_3challenge.php" method="POST">
    <input type="text" name="no1" size="5" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')">
    ×
    <input type="text" name="no2" size="5" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')">
    <br>
    掛け算<input type="radio" name="keisan" value="掛け算">
    累乗<input type="radio" name="keisan" value="累乗">
    <input type="submit" name="btn" value="計算">
    <br><br>
  </form>
  <body>
    <?php
    /*
    課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、
    最後はデフォルト値がfalseの$typeを引き数として定義する。
    1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、
    $typeがfalseの時はその値を表示、trueのときはさらに累乗して表示する。
    */

   //function 関数名($引数1,$引数2,$引数3=デフォルト値)
      function show_data($num,$secondnum,$type=false){
      	if($type===false){
      		echo $num * $secondnum;
        }
        if($type===true){
          echo ($num * $secondnum)*($num * $secondnum);
        }
      }

      if(isset($_POST['keisan']) && ($_POST['keisan']=="掛け算" || $_POST['keisan']=="累乗")){
        if($_POST['keisan']=="掛け算"){
          echo $_POST['no1'].'×'.$_POST['no2'].'=';
          show_data($_POST['no1'],$_POST['no2'],false);
        }elseif($_POST['keisan']=="累乗"){
          echo '('.$_POST['no1'].'×'.$_POST['no2'].')'.'×'.'('.$_POST['no1'].'×'.$_POST['no2'].')'.'=';
          show_data($_POST['no1'],$_POST['no2'],true);
        }
      }

    ?>
  </body>

</html>

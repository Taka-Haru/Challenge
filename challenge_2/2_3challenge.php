<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_3challenge</title>
</head>
  <body>
    
    <!--３．for文を利用して、8を20回掛ける処理を実現してください。-->

    <!--問題定義-->
    フォームに好きな数値を入力すると、その数字を20回掛けてくれます。<br>
    ※課題では8を掛けることとなってます。<br><br>

  <form action="2_3challenge.php" method="POST">
    <input type="text" name="int" size="5"
    onKeyup="this.value=this.value.replace(/[^0-9]+/,'')">  <!--半角数字以外認めない式-->
    <input type="submit" name="btn" value="掛け算"><br><br>
  </form>

  <?php

    if(!empty($_POST['btn'])){
      if($_POST['int']==''){
        echo '値を入力して下さい。';
      }else{
      $x = $_POST['int'];
        echo '入力されたのは : '.$x.'<br>'.'<br>';
        for($i=1; $i<=20; $i++){
        echo '×'.$i.'=  '.$i*$x.'<br>';
        }
      echo '<br>';
      echo '<br>';
      }
    }

  ?>

 </body>
</html>

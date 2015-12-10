<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_2challenge</title>
</head>
<!-- ２．以下の機能を実装してください。
　　　１で作成したHTMLの入力データを取得し、画面に表示する -->

  <body>

    <?php
      if(!empty($_POST["txtName"]==null)){
        echo '名前を入力して下さい。';
        echo '<br>';
      }else{
      echo '名前：'.$_POST['txtName'];
      echo '<br>';
      }
      if(isset($_POST["rdo"]) && ($_POST["rdo"] == "男") || ($_POST["rdo"] == "女")){
        echo '性別：'.$_POST['rdo'];
        echo '<br>';
      }else{
      echo  '性別を入力してください。';
      echo '<br>';
      }
      if(!empty($_POST["mulText"]==null)){
        echo '趣味・特技を入力して下さい。';
        echo '<br>';
      }else{
      echo '趣味：'.$_POST['mulText'];
      echo '<br>';
      }
    ?>

  </body>
</html>

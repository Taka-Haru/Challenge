<!--
７．以下の機能を実装してください。

名前・性別・趣味を入力するページを作成してください。
また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
記録されたデータを初期値として表示してください。
※PHPと同時に、HTMLの知識が必要になります。
※入力フィールドの使い方を調べてみましょう。
-->
<?php
    session_start();

    if(empty($_SESSION['name'])){
      $name = null;
    }else{
      $name = $_SESSION['name'];
    }
    if(!empty($_POST['txtName'])){
      $_SESSION['name'] = $_POST['txtName'];
      $name = $_POST['txtName'];
    }

    if(empty($_SESSION['gender'])){
      $gender = null;
    }else{
      $gender = $_SESSION['gender'];
    }
    if(!empty($_POST['rdo'])){
      $_SESSION['gender'] = $_POST['rdo'];
      $gender = $_SESSION['gender'];
    }

    if(empty($_SESSION['area'])){
      $area = null;
    }else{
      $area = $_SESSION['area'];
    }
    if(!empty($_POST['mulText'])){
      $_SESSION['area'] = $_POST['mulText'];
      $area = $_SESSION['area'];
    }
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>5_7challenge</title>
  </head>
  <body>

  <form action="./5_7challenge.php" method="POST">
  名前<br>
  <input type="text" name="txtName" value="<?php if(!empty($name)){echo $name;}?>">
  <br><br>
  性別<br>
  <input type="radio" name="rdo" value="男"<?php if(!empty($gender) && ($gender == "男")){echo "checked";} ?>>男
  <input type="radio" name="rdo" value="女"<?php if(!empty($gender) && ($gender == "女")){echo 'checked';} ?>>女
  <br><br>
  趣味・特技:<br>
  <textarea name="mulText" rows="4" cols="40"><?php if(!empty($area)){echo $area;}?></textarea><br>
  <input type="submit" name="btnSubmit" value="GO!!!!" style="WIDTH:200px; HEIGHT:20px">
  </form>
  </body>
</html>

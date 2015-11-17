<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_2challenge</title>
</head>

  <body>
    <?php
      echo '名前：'.$textbox = $_POST['txtName'];
      echo '<br>';
      echo '性別：'.$radio = $_POST['rdo'];
      echo '<br>';
      echo '趣味：'.$textarea = $_POST['mulText'];
      ?>
</body>

</html>

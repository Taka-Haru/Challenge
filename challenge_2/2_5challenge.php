<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_5challenge</title>
</head>
  <body>
  for文を利用して、<br>
  0から100を全部足す処理を実現してください。
  <br><br>
  <?php

    $sum = 0;
    for($i=1; $i<=100; $i++){
      $sum = $i + $sum;
    }
    echo '結果： '.$sum;
    echo '<br>';

  ?>

  </body>
</html>

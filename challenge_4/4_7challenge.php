<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_7challenge</title>
</head>
  <body>
  以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。<br>
  『きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます』
    <br><br>

    <?php

    $iwoi = str_replace('I','い','きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます');
    echo '結果：'.str_replace('U','う',$iwoi);
    echo '<br>';
    echo '翻訳：今日はPHPの組み込み関数の学習をしています。';
    ?>
</body>

</html>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
７．以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、
　　結果を表示してください。
　　「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」
*/
$iwoi = str_replace('I','い','きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます');
echo str_replace('U','う',$iwoi);
?>
</body>

</html>

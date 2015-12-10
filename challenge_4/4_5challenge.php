<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_5challenge</title>
</head>
  <body>
    <!-- ５．自分の氏名について、バイト数と文字数を取得して、表示してください。 -->
  <?php

  echo '『武田信玄』の名前のバイト数は：';
  echo strlen ('武田信玄');
  echo '<br>';
  echo '『上杉謙信』の名前の文字数は：';
  echo mb_strlen('上杉謙信');
  echo '<br>';
  ?>
</body>

</html>

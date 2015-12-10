<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_3challenge</title>
</head>
  <body>
    <!-- ３．2016年11月4日 10時0分0秒のタイムスタンプを作成し、
    　　「年-月-日 時:分:秒」で表示してください。 -->
    <?php

    $timestamp = mktime(10, 00, 00, 11, 4, 2016);
    $newday = date('Y-m-d H:i:s',$timestamp);
    echo $newday;

    ?>
</body>

</html>

<html>
<head>
  <title>10_3challenge</title>
</head>
  <body>
  <!--
  ３．baseという抽象クラスを作成し、以下を実装してください。
　　・loadというprotectedな関数を用意してください。
　　・showという公開関数を用意してください。
  -->
  <?php
  abstract class Base{
    abstract protected function load();
    abstract public function show();
  }

  ?>
  </body>
</html>

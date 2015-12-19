<html>
<head>
  <title>10_4challenge.php</title>
</head>
  <body>
  <!--
  ４．３で作成した抽象クラスを継承して、以下のクラスを作成してください。
　　・人の情報を扱うHumanクラス
　　・駅の情報を扱うStationクラス
　　また、各クラスに隠匿変数でtableという変数を用意し、各クラスの初期化処理で
　　table変数にテーブル名を設定してください。
  -->

  <?php
  abstract class Base{
    abstract protected function load();
    abstract public function show();
  }

  class Human extends Base{
    private $table;
    function__construct(){
    $this->name = 'user';
    }
  }

  class Station extends Base{
    private $table;
    function__construct(){
    $this->name = 'station';
    }
  }

  ?>
  </body>
</html>

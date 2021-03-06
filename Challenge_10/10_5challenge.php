<html>
<head>
<title>10_5challenge</title></head>
<body>
  <!--
  ５．load関数でDBから全情報を取得するように各クラスの関数を実装してください。
  　　その際、table変数を利用して、データを取得するようにしてください。
  -->
  <?php
  abstract class Base{
    abstract protected function load();
  }

  //Humanクラス
  class Human extends Base{
    private $table;

    //Humanクラスのデータ取得関数
    function load(){
      //try-catchで接続エラーを取得＆表示
      try{
        $pdo_object=
        new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
        'sakamoto',2591);
      }catch(PDOException $E){
        die('接続に失敗しました:'.$E->getMessage());
      }
      //SQL文を格納した文字列を定義
      $sql = "select * from $this->table";
      //実行とその結果を受け取れる変数を用意
      $query = $pdo_object -> prepare($sql);
      //SQLを実行
      $query -> execute();
    }

    //初期化処理
    public function __construct(){
      $this->table = 'user';
    }
  }

  //Stationクラス
  class Station extends Base{
    private $table;

    //Humanクラスのデータ取得関数
    function load(){
      //try-catchで接続エラーを取得＆表示
      try{
        $pdo_object=
        new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
        'sakamoto',2591);
      }catch(PDOException $E){
        die('接続に失敗しました:'.$E->getMessage());
      }
      //SQL文を格納した文字列を定義
      $sql = "select * from $this->table";
      //実行とその結果を受け取れる変数を用意
      $query = $pdo_object -> prepare($sql);
      //SQLを実行
      $query -> execute();
    }

    //初期化処理
    public function __construct(){
      $this->table = 'user';
    }
  }
  ?>
</body>
</html>

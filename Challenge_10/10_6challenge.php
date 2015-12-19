<html>
<head>
<title>10_6challenge</title>
</head>
<body>
  <!--
  ６．show関数で各テーブルの情報の一覧が表示されるようにしてください。
  -->

<?php
  abstract class Base{
    abstract public function  show();
  }

  //Humanクラス
  class Human extends Base{
    private $table;

    //Humanクラスのデータ表示関数
    public function show(){
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

      while($row = $query->fetch(PDO::FETCH_OBJ)){
  			echo $row->userID;
  			echo $row->name . "<br>";
  			echo $row->tell . "<br>";
  			echo $row->age . "<br>";
  			echo $row->birthday . "<br>";
  			echo $row->departmentID . "<br>";
  			echo $row->stationID . "<br>" . "<br>";
  		}
    }
    //初期化処理
    public function __construct(){
      $this->table = 'user';
    }
  }

  //Stationクラス
  class Station extends Base{
    private $table;

    //Stationクラスのデータ表示関数
    public function show(){
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

      while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo $row->stationID ;
  			echo $row->stationName . "<br>";
  		}
    }

    //初期化処理
    public function __construct(){
      $this->table = 'station';
    }
  }

  $profile = new Human();
  $profile->show();
  $station = new Station();
  $station->show();

  $pdo_object = null;
?>
</body>
</html>

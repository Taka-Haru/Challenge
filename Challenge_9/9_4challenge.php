<html>
<head>
  <title>9_4challenge</title>
</head>
<body>

<!--
４．以下の機能を持つクラスを作成してください。
　　　・パブリックな２つの変数
　　　・２つの変数に値を設定するパブリックな関数
　　　・２つの変数の中身をechoするパブリックな関数
-->
<?php

  class Human{

    //パブリックな２つの変数を設定
    public $name;
    public $age;
    public $from ='Japan';


    //２つの変数に値を設定するパブリックな関数
    public function profile($name,$age){
      $this->name = $name;
      $this->age = $age;
    }

    //２つの変数の中身をechoするパブリックな関数
    public function show(){
      echo $this->name.'<br>';
      echo $this->age.'<br>';
    }
  }   //クラス定義終了

  $x = new Human();
  echo $x->from.'<br>';
  $x->profile('日本太郎',24);
  $x->show();
?>

</body>
</html>

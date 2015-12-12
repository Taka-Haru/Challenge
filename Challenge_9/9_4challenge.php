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

    //２つの変数に値を設定するパブリックな関数
    public function profile($name,$age){
      $this->name = $name;
      $this->age = $age;
    }

    //２つの変数の中身をechoするパブリックな関数
    public function show(){
      echo $this->name;
      echo $this->age;
    }
  }

  $x = new Human();
  $x->profile('日本太郎', 27);
  $x->show();
?>

</body>
</html>

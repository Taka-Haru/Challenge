<html>
<head><title>9_5challenge.php</title></head>
  <body>
  <!--
  ５．４のクラスを継承し、以下の機能を持つクラスを作成してください。
  　　・２つの変数の中身をクリアするパブリックな関数
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
    }

    //４のクラスを継承し中身のクリア処理
    class Teacher extends Human{
    	public function clear_profile(){
    		$this->name = null;
    		$this->age = null;
    	}
    }

  $y = new Teacher();
  $y->clear_profile();

  ?>
  </body>
</html>

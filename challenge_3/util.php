<?php

  //プロフィール
  function my_profile(){
      return array(
            1 => 'TakaharuSakamoto<br>',
            2 => '1988-11-24<br>',
            3 => '前職：飲食業<br>',
      );
  }

//偶数・奇数判定
  function view_int($num){
    if($num % 2 == 0){
        echo "偶数です。";
    }else{
        echo "奇数です。";
      }
  }

?>

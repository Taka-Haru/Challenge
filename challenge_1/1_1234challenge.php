<?php

   /*
   1.「Hello world.」を表示してください。
   (変数に代入して表示の復習)
   */
        echo 'Q1 :「Hello world.」を表示してください。'.'<br>';
        $aisatsu = 'Hello world.';
        echo $aisatsu.'<br>';
        echo '<br>';

   //2.「groove」「-」「gear」の３つの文字列を連結して表示してください。
        echo 'Q2: Campさせて頂いてる会社名は？'.'<br>';
        echo 'groove'.'-'.'gear'.'<br>';
        echo '<br>';

   /*
   ３．自分の自己紹介を作成してみてください。
   (ユーザー定義関数を使った方法で復習)
   */
    echo 'Q3: 簡単に自己紹介をしてくだい。'.'<br>';
      function my_profile(){
        echo 'Name  : '.'My name is Takaharu Sakamoto.'.'<br>';
        echo 'From   : '.'I was born in Kakgawa,but I grew up in Saitama.'.'<br>';
        echo 'Blood : '.'My blood type is AB.'.'<br>';
        echo '<br>';
      }
      my_profile();

   /*
   4.5.定数と変数を宣言し、それぞれに数値を入れて四則演算を行ってください。
   (修正→数字にはシングルクォーテつけては駄目。PHPは無視してくれるが)
   {変数の上書き。定数は上書き不可。
    一応、無視して演算結果出してくれるが、エラー表記も出る}
   */

   //問題表示
    echo 'Q4: 四則演算を行ってください'.'<br>';
    echo '　　(今回は[3]と[2]を使用)'.'<br>';
      $variable = 2;
      $variable = 3;
      const INT = 2;

      echo '足し算結果は：';
      echo $variable + INT.'<br>';
      echo '引き算結果は：';
      echo $variable - INT.'<br>';
      echo '掛け算結果は：';
      echo $variable * INT.'<br>';
      echo '割り算結果は：';
      echo $variable / INT.'<br>';
      echo '<br>';
      
?>

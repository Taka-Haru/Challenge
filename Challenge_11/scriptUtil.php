<?php

//入力フォーム打ち込み内容
  function user_profile(){

    echo '名前：'.'<br>'.$name= $_POST['name'].' 様';    //変数$nameに格納しておく
    echo '<br>';
    echo '<br>';
    echo '生年月日：'.'<br>'.$birthYear=$_POST['year'].'年';      //変数$birthYearに格納しておく
                echo $birthMonth=$_POST['month'].'月';   //変数$birthMonthに格納しておく
                echo $birthDay=$_POST['day'].'日';       //変数$birthDayに格納しておく
    echo '<br>';
    echo '<br>';
    echo '種別：'.'<br>'.$job = $_POST['job'];         //変数$jobに格納しておく
    echo '<br>';
    echo '<br>';
    echo '電話番号：'.'<br>'.$tell= $_POST['tell'];    //変数$tellに格納しておく
    echo '<br>';
    echo '<br>';
    $textarea = $_POST['introduction'];
    $textarea = nl2br($textarea);
    echo '趣味：'.'<br>'.$textarea;
    echo '<br>';
  }

?>

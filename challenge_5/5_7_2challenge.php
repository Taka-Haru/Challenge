<html>
  <head>
    <meta charset="UTF-8">
    <title>5_7_2challenge</title>
  </head>
  <body>

<?php
//まず、ここでまとめてついかしてしまう！
$name = $_POST['txtName'];
$gender = $_POST['rdoGender'];
$hobby = $_POST['mulText'];

if($name == null){
  echo '名前が記入されていません。';
}else{
  echo 'はじめまして、 '.$name.'様';
  }
echo '<br>';

/*　ラジオボタンの時のif文が分からない。。。エラーになる
    　男女の選択にチェックを入れないとエラー文がでる。
if($gender== null){
  echo '性別が選択されていません。';
  }
*/

echo 'あ、'.$gender.'の人だったんですね！！';

echo '<br>';
if($hobby == null){
  echo '趣味が記入されていません。';
}else{
  echo 'へ〜、'.$hobby.'が好きなんですね♫';
  }
echo '<br>';
echo '<br>';

//Javascriptの「onclick="history.back()"」だったら簡単にできるという。。。反則ですが。。
echo '<form>';
echo '<input type="button" onclick="history.back()" value="戻る">';
echo '</form>';


?>
  </body>
</html>

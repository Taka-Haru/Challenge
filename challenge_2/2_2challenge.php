<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_2challenge</title>
</head>
  <body>
  <!--
  ２．swtich文を利用して、以下の処理を実現してください。
  　値が’A’なら「英語」、値が’あ’なら「日本語」、それ以外は何も表示しない処理
  (ラジオボタンでの選択結果で表示の復習)
  -->

  <!--問題定義-->
  チェックした項目が何の言語なのか表示します。<br>
  ※「それ以外」は何も表示しません。<br><br>


  <form action=2_2challenge.php method="POST">
    　Ａ　　<input type="radio" name=rdo value="英語"><br>
    　あ　　<input type="radio" name=rdo value="日本語"><br>
  その他　<input type="radio" name=rdo value="それ以外"><br>
  <!--何も選択がない場合にエラー表記が出ないようにする。-->
  <input type="radio" name=rdo value="" checked="checked" style="display:none;">
    <br>
    <input type="submit" name="btn" value="言語">
  </form>
  <br>

  <?php
    if(!empty($_POST['btn'])){
      $x = $_POST['rdo'];
      switch($x){
        case '英語':
          echo '英語';
          break;
        case '日本語':
          echo '日本語';
          break;
        case '';
          echo '何か選んで下さい。';
          break;
        default:
          echo '';
        }
    }
  ?>

  </body>
</html>

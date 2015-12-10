<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body>
    <?php

    //POSTでの値の取得を追記
    $name = $_POST['name'];
    //date型にするために1桁の月日を2桁にフォーマットしてから格納
    $birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
    $type = $_POST['type'];
    $tell = $_POST['tell'];
    $comment = $_POST['comment'];
    //idの引数を追記。
    $result = update_profile($_GET['id'],$name,$birthday,$tell,$type,$comment);
    //エラーが発生しなければ表示を行う
    if(!isset($result)){
    ?>
    <!--更新内容表示の追記-->
    <h1>更新確認</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo ex_typenum($type);?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br><br>
    以上の内容で更新しました。<br>
    <?php
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>
  </body>
</html>

<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
</head>
  <body>
        <h1>検索結果</h1>

        <?php
        //未入力の場合、nullにする処理を追記
        if(empty($_GET['name'])){
            $_GET['name'] = null;
        }
        if(empty($_GET['year'])){
            $_GET['year'] = null;
        }
        if(empty($_GET['type'])){
            $_GET['type'] = null;
        }

        $result = null;
        if(empty($_GET['name']) && empty($_GET['year']) && empty($_GET['type'])){
            $result = search_all_profiles();
        }else{
            $result = search_profiles($_GET['name'],$_GET['year'],$_GET['type']);
        }
        if(!empty($result)){
        ?>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>生年月日</th>
                <th>種別</th>
                <th>登録日時</th>
            </tr>
        <?php
        foreach($result as $value){
        ?>
            <tr>
                <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']?>"><?php echo $value['name'];?></a></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo ex_typenum($value['type']); ?></td>
                <td><?php echo date('Y年n月j日　H時i分s秒', strtotime($value['newDate']));; ?></td>
            </tr>

      <?PHP }
    }else{
      echo 'データが存在しません'.'<br>';
    }?>
        </table>
        <?php echo return_top();?>
</body>
</html>

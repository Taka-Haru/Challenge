<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>変更入力画面</title>
</head>
<body>
  <!--id情報を受け渡せるようにform内容を修正-->
    <form action="<?php echo UPDATE_RESULT ?>?id=<?php echo $result[0]['userID'];?>" method="POST">
    <?php
    $result = profile_detail($_GET['id']);
    ?>

    名前:
    <input type="text" name="name" value="<?php echo $result[0]['name']; ?>">
    <br><br>

    生年月日:　
    <select name="year">
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
          <!--年が選択されているように修正-->
          <option value="<?php echo $i;?>"<?php if($i==date('Y',strtotime($result[0]['birthday']))){echo "selected";}?>><?php echo $i ;?></option>
          <?php } ?>
    </select>年
    <select name="month">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
          <!--月が選択されているように修正-->
        <option value="<?php echo $i;?>"<?php if($i==date('n',strtotime($result[0]['birthday']))){echo "selected";}?> ><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
          <!--日が選択されているように修正-->
        <option value="<?php echo $i; ?>"<?php if($i==date('j',strtotime($result[0]['birthday']))){echo "selected";}?>><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <?php
    for($i = 1; $i<=3; $i++){ ?>
    <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$result[0]['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
    <?php } ?>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $result[0]['tell']; ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $result[0]['comment']; ?></textarea><br><br>

    <input type="hidden" name="mode"  value="RESULT">
    <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    </form>
      <!--id情報を受け渡せるようにform内容を修正-->
    <form action="<?php echo RESULT_DETAIL; ?>?id=<?php echo $result[0]['userID'];?>" method="POST">
      <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    <?php echo return_top(); ?>
</body>

</html>

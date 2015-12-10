<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_9challenge</title>
</head>
<!-- 課題9:課題6の3人分のプロフィールのうち1人だけ住所が値nullの状態で定義し、
      foreachで全員分のプロフィールをid以外表示する処理を実行する。
      この際、歯抜けになっているデータはcontinueで飛ばす -->
  <body>
    <?php
      function get_members(){

        $busho = array(
              "A" => array("1<br>","織田信長<br>","6月23日<br>",null.'<br>'),
              "B" => array("2<br>","豊臣秀吉<br>","2月6日<br>","尾張国<br>"),
              "C" => array("3<br>","徳川家康<br>","1月31日<br>","三河国<br>"),
        );
        return $busho;
      }

      $profile = get_members();
      foreach($profile as $value){
        foreach($value as $key => $kwsk){
          if($key == 0 || $kwsk == null){
            continue;
        }
        echo $kwsk;
        }
      }

    ?>

  </body>
</html>

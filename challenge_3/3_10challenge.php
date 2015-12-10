<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_10challenge</title>
</head>
  <body>
    <!-- 課題10:先に$limit=2を定義しておき、
          課題9の処理のうち2人目($limitで定義した値の人数)までで
          foreachのループを抜けるようにする -->
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
    $limit = 2;

    foreach($profile as $value){
      foreach($value as $key => $kwsk){
        if($key == 0 || $kwsk == null){
          continue;
        }
        echo $kwsk;
      }
      if($limit ==  $value[0]){
      break;
      }
    }

    ?>
  </body>
</html>

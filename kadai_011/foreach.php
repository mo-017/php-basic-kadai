<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>11章課題</title>
</head>
<body>
  <p>
    <?php
    $commodity = [
      '名前' => '玉ねぎ',
      '値段' =>  200,
      '産地' => '北海道',
    ];

    // 連想配列$commodityのキーと値を順番に1つずつ出力する
    foreach ($commodity as $key => $value) {
      echo "{$key} : {$value}<br>";
    }
    ?>
    </p>
  
</body>
</html>
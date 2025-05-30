<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      function sort_2way(&$array, $order = true) {
      // ソート方向がTRUEなら昇順、FALSEなら降順
      if ($order) {
        sort($array); // 昇順でソート
      } else {
        rsort($array); // 降順でソート
      }
      }

      // ソート対象の配列
      $nums = [15, 4, 18, 23, 10];

      // 昇順でソート
      sort_2way($nums, true);
      echo "昇順にソートします。<br>";
      foreach ($nums as $num) {
          echo $num . '<br>';  // 1行ずつ表示
      }

      // 降順でソート
      sort_2way($nums, false);
      echo "降順にソートします。<br>";
      foreach ($nums as $num) {
          echo $num . '<br>';  // 1行ずつ表示
     }
    ?>
  </P>
  
</body>
</html>
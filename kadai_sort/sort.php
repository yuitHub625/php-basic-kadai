<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 昇順、降順ソート関数
        function sort_2way($nums, $order) {
          if($order) {
            echo '昇順にソートします。<br>';
            sort($nums); // 昇順にソート
            foreach ($nums as $num) {
              echo $num . '<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            rsort($nums); // 降順にソート
              foreach($nums as $num) {
                echo $num . '<br>';
              }
            }
        }

        $array = [15, 4, 18, 23 ,10];
        sort_2way($array, true); // 昇順でソートを呼び出し
        echo "<hr>"; // 区切り線
        sort_2way($array, false); // 降順でソートを呼び出し
        ?>
    </p>
</body>

</html>
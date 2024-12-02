<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = array(15, 4, 18, 23, 10);
        function sort_2way($array, $rise = true){
            if($rise){
                echo "昇順にソートします。<br>";
                sort($array);
            }else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
                foreach($array as $value){
                    echo $value . "<br>";
                }

            }

        sort_2way($nums, TRUE);
        echo "<hr>";
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
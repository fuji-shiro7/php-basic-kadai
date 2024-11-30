<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 連想配列に値を代入する
         $personal_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
         //  配列$user_namesのインデックスと値を1つずつ順番に出力する
         foreach ($personal_data as $index => $value) {
            echo "{$index}：{$value}<br>";
        }
         ?>
     </p>
 </body>
 
 </html>
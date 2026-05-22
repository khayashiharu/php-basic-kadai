<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php

      // 配列
      $food_datas = ['名前' =>  '玉ねぎ', '値段'=>'200', '産地'=>'北海道'];

      $personal_datas = ['id' =>  '1', '名前' =>  '侍太郎', '年齢' =>  '30'];

       //  配列$user_namesの要素を1つずつ順番に出力する
       foreach ($personal_datas as $personal_data) {
           echo $personal_data . '<br>';
       }
       ?>
   </p>
</body>

</html>
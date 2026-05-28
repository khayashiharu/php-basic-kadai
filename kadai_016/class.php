<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
      class Food{
        public $name;
        public $price;

        // メソッドを定義する
        public function show_price() {
          echo $this->price.'<br>';
        }
      }

      class Animal{
        public $name;
        public $height;
        public $weight;

        // メソッドを定義する
        public function show_height() {
          echo $this->height. '<br>';
        }
      }

       // インスタンス化する
       $vege = new Food();
       $vege->name='potato';
       $vege->price='250';
       //echo $vege->name;
       print_r($vege);
       echo '<br>';


       // インスタンス化する
       $dog = new Animal();
       $dog->name='dog';
       $dog->height='60';
       $dog->weight='5000';
       //echo $dog->name;
       print_r($dog);
       echo '<br>';


       // メソッドにアクセスして実行する
       $vege->show_price();

       // メソッドにアクセスして実行する
       $dog->show_height();

       ?>
   </p>
</body>

</html>
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

      // コンストラクタ
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

        // メソッドを定義する
        public function show_price() {
          echo $this->price.'<br>';
        }
      }

      class Animal{
        public $name;
        public $height;
        public $weight;

        // コンストラクタ
        public function __construct($name, $height, $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // メソッドを定義する
        public function show_height() {
          echo $this->height. '<br>';
        }
      }

       // インスタンス化する
       $vege = new Food("potato", 250);
       print_r($vege);
       echo '<br>';


       // インスタンス化する
       $dog = new Animal("dog", 60, 5000);
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
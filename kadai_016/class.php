<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>16章課題t</title>
</head>
<body>
  <p>
    <?php
     // クラスを定義する
     class Food {
      // プロパティの定義
      private $name;
      private $price;

      // コンストラクタの定義
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
     //メソッドの定義
     public function show_price(){
      return $this ->price;
     }     
     }

     // インスタンス化にする
     $food = new Food('potato',250);

     //インスタンス$foodの各プロパティの値を出力する
     print_r($food);

     echo '<br>';


     // クラスを定義する
     class Animal {
      // プロパティの定義
      private $name;
      private $height;
      private $weight;

      //コンストラクタの定義
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      // メソッドの定義
     public function show_height(){
      return $this->height;
     }
     }
  
     // インスタンス化にする
     $animal = new Animal('dog', 60, 5000);
     print_r($animal);

     // 改行する
     echo '<br>';

      //  $priceのメソッドにアクセスし出力する
     echo $food->show_price() . '<br>';

     // $heightのメソッドにアクセスし出力する
     echo $animal->show_height() .'<br>';
    
     ?>
     </p>
  
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF8">
    <title>PHP基礎編</title>

</head>

<body>
    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを意義する
            private $name;
            private $price;
           
            // メソッドを定義する
            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
             // コンストラクタを定義する
             public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;           
            }
            }

        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;
           
            // メソッドを定義する
            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }    
            }

            // Foodクラスをインスタンス化する
            $potato = new Food('potato', 250);
            // $foodのプロパティを出力する
            print_r($potato);
           
            // 改行する
            echo '<br>';

            // $Animalクラスをインスタン化する
            $dog = new Animal('dog', 60, 5000);
            // $animalのプロパティを出力する
            print_r($dog);

            // 改行する

            echo '<br>';

            // Foodクラス内のshow_priceを実行
           $potato->show_price();

            // Animalクラス内のshow_heightを実行
            $dog->show_height();
            
            ?>
        </p>

        </body>
        </html>


        


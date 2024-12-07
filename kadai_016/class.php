<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food
        {
            // プロパティを定義する                        
            public $name;
            public $price;

            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義する
            public function show_price()
            {
                echo $this->price;
            }
        }
        $food = new Food('potato', 250);

        print_r($food);
        echo "<br/>";

        $food->show_price();
        ?>
    </p>
    <p>
        <?php
        class Animal
        {
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height()
            {
                echo $this->height;
            }
        }
        $animal = new Animal('dog', 60, 5000);

        print_r($animal);
        echo "<br/>";

        $animal->show_height();
        ?>
    </p>

</body>

</html>
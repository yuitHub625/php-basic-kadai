<?php

class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティを出力するメソッド
    public function show_price() {
        echo $this->price . "\n";
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティを出力するメソッド
    public function show_height() {
        echo $this->height . "\n";
    }
}

// Foodクラスのインスタンスを作成
$food = new Food("potato", 250);
print_r($food);
$food->show_price();

// Animalクラスのインスタンスを作成
$animal = new Animal("dog", 60, 5000);
print_r($animal);
$animal->show_height();

?>
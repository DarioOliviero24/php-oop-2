<?php

class Category {

    public $name;
    public $icon;

    function __construct(string $name, string $icon){
       $this->name = $name; 
       $this->icon = $icon;  
    }

}

class Product {

    public $title;
    public $price;
    public $img;
    protected $category;

    function __construct(string $title, float $price, string $img, Category|null $category = null) {
        $this->title = $title;
        $this->price = $price;
        $this->img = $img;
        $this->setCategory($category);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category|null $category) {
        $this->category = $category;
    }
}
class Food extends Product {
    public $ingredients;
    function __construct(string $title,float $price,string $img, Category| null $category = null,string $ingredients = null){
        parent:: __construct($title,$price,$img,$category);

        $this->ingredients = $ingredients;
    }
}
class Toy extends Product {
    public $material;
    function __construct(string $title,float $price,string $img, Category| null $category = null,string $material = null){
        parent:: __construct($title,$price,$img,$category);

        $this->material = $material;
    }
}
class PetBed extends Product {
    public $size;
    function __construct(string $title,float $price,string $img, Category| null $category = null,string $size = null){
        parent:: __construct($title,$price,$img,$category);

        $this->size = $size;
    }

}
$Cani = new Category ('Cani','🐕');
$Gatti = new Category ('Gatti','🐈');



$prodottoPerGatti = new Product (
    'Prodotto per Gatti',
    12.15,
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmAnxkd40t8ikKd87z8WlLglsD0pFgNBjndg&s',
    $Gatti
);



$ciboPerGatti = new Food (
    'Cibo per Gatti',
    18.99,
    'https://www.brekz.it/44262/large_default.jpg',
    $Gatti,
    'Manzo, Carote, Olio, Acqua'
);



$cucciaPerGatti = new PetBed (
    'cuccia per Gatti',
    24.99,
    'https://images.epto.it/immagini/big/vdl/VX170970_01.jpg',
    $Gatti,
    'Medium'
);
 

$prodottoPerCani = new Product (
    'Prodotto per Cani',
    11,35,
    'https://it.zooexperte.com/image/cache/catalog/Der_Zoo_Exsperte/Products/Dental/Dental-Spray/zahnpflege-dental-spray-dog-800x800.jpg',
    $Cani
);



$ciboPerCani = new Food (
    'Cibo per Cani',
    14.89,
    'https://www.gardenbedettishop.com/29865-large_default/crocchette-per-cani-trainer-natural-adult-maxi-pollo-riso-e-aloe-vera-12-kg.jpg',
    $Cani,
    'Manzo, Carote, Olio, Acqua'
);



$cucciaPerCani = new PetBed (
    'Cuccia per Cani',
    27,49,
    'https://legnonaturale.com/wp-content/uploads/2020/12/cucce-per-cani-1.jpg',
    $Cani,
    'Medium'
);

$products = [
    $prodottoPerGatti,
    $ciboPerGatti,
    $cucciaPerGatti,
    $prodottoPerCani,
    $ciboPerCani,
    $cucciaPerCani
];
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class='py-4 mb-4'>
        <div class="container">
            <div class="row">
                <div class='col text-center'>
                    <h1>
                        PHP OOP SHOP
                    </h1>

                </div>
            </div>
        </div>
    </header>
    <main>
        <div class='container'>
            <div class='row g-3'>
                <?php
                foreach ($products as $product){
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <?php    
                }
                ?>
            </div>
        </div>
    </main>

    
</body>
</html>
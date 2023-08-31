<?php 

$inc = $_GET['inc'] ?? 'home';

return match ($inc){

    'home' => function () {
        create('products',[
            'name' => 'Product1',
            'price' => 345,
            'img' => 'assets/img/product-1.png',
            'description' => 'lorem ipsum'
        ]);





    },
    'detail' => function () {
        var_dump('detail');
    },
    'contact' => function () {
        var_dump('contact');
    },
    default => function(){
        echo ("Not Found");
    }

    
};
<?php
//общую стоимость товаров в корзине с учетом возможных скидок.
//Условия скидок:
//Если в корзине есть хотя бы один товар со стоимостью более 1000 рублей, предоставить скидку 10% на все товары в корзине;
//Если в корзине более 3 товаров, предоставить скидку 5% на все товары в корзине.
//Функция должна возвращать общую стоимость с учетом скидки.
function paycheck(array $cart){
    $finalPrice = 0;
    $frsDiscount = false;
    $scnDiscount = count($cart)>3;

    foreach ($cart as $product){
        if($product['price'] > 1000){
            $frsDiscount = true;
        }
        $finalPrice += $product['price'];
    }

    if($frsDiscount){
        $finalPrice *= 0.9;
    }
    if($scnDiscount){
        $finalPrice *= 0.95;
    }

    return $finalPrice;
}

$shoppingCart = [
    ['product' => 'Телефон', 'price' => 1200],
    ['product' => 'Наушники', 'price' => 800],
    ['product' => 'Ноутбук', 'price' => 1500],
    ['product' => 'Чехол', 'price' => 500],
];

$finalPrice = paycheck($shoppingCart);
print_r($finalPrice);
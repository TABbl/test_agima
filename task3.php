<?php

class Book{
    private string $title;
    private string $author;
    private int $year;
    private int $price;

    public function __construct($title,$author,$year,$price){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
    }

    public function getInfo(){
        return "Название: $this->title, Автор: $this->author, Год выпуска: $this->year, Цена: $this->price";
    }
}

$book1 = new Book("Мертвые души", "Н. В. Гоголь", 1842, 1500);
$book2 = new Book("Мартин Иден", "Джек Лондон", 1909, 1000);

print_r($book1->getInfo()."\n");
print_r($book2->getInfo());
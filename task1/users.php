<?php

$name = $_POST["name"];
$email = $_POST["email"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];

if(!$name or !(preg_match("/^[a-zA-Z0-9]{2,15}$/", $name))){
    exit("Укажите корректное имя пользователя");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("$email некорректная электронная почта");
}
if(!$rating or $rating < 0 or $rating >5){
    exit("Укажите корректную оценку");
}
if(!$comment){
    exit("Комментарий не может быть пустым");
}

$userFb = "Имя: $name \n Почта: $email \n Оценка: $rating \n Отзыв: $comment \n";
$filename = "feedbacks.txt";
$fp = fopen($filename, "a");
fwrite($fp, $userFb);
fclose($fp);

echo "Спасибо за ваше сообщение!";
<?php
// Откликаться будет ТОЛЬКО на ajax запросы
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest'){
    header("HTTP/1.0 404 Not Found");
    header("Location: /404");
    //return;
}

// Если в массиве POST нет действия - выход
if (empty($_POST)) {return;}

$message = '';

if (isset($_POST['child_name'])){
    $child_name = $_POST['child_name'];
    $message .="Имя ребенка: $child_name \r\n";
}
if (isset($_POST['birth'])){
    $birth = $_POST['birth'];
    $message .="Дата рождения ребенка: $birth \r\n";
}
if (isset($_POST['parent_name'])){
    $parent_name = $_POST['parent_name'];
    $message .="Имя родителя: $parent_name \r\n";
}
if (isset($_POST['phone'])){
    $phone = $_POST['phone'];
    $message .="Телефон: $phone \r\n";
}
if (isset($_POST['wishes'])){
    $wishes = $_POST['wishes'];
    $message .="Пожелания: $wishes \r\n";
}
if (isset($_POST['comments'])){
    $comments = $_POST['comments'];
    $message .="Примечания: $comments \r\n";
}
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $message .="Телефон: $email \r\n";
}




$result = mail("iriska@yandex.ru", "Сообщение из формы заказа путевок", $message); 

if($result === true){
    echo "Done";
}else{
    echo "Error: " . $result;
}
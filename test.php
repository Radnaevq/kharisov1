<?php

/* Принимаем данные из формы */
  $name = $_POST["name"]; 
  $email = $_POST["email"];
  $text_message = $_POST["message"];

/* Подключаемся к базе данных */
$link = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
mysqli_select_db($link, "forma");

/* Записываем данные в БД */ 
$sql = "INSERT INTO feedback(name, email, msg) VALUES ('$name', '$email', '$text_message')";
$result=mysqli_query($link, $sql);

/* Делаем редирект обратно */
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;

?>
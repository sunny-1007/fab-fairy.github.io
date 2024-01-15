<?php
// Получение данных из POST запроса
$name = $_POST['name'];
$phone = $_POST['phone'];
$time = $_POST['time'];
$date = $_POST['date'];

// Установка соединения с базой данных
$servername = "localhost";
$username = "fawn";
$password = "choisan1007";
$dbname = "elizasait";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Подготовка и выполнение запроса INSERT
$sql = "INSERT INTO резервация (имя, телефон, время, дата) VALUES ('$name', '$phone', '$time', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при добавлении данных: " . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>
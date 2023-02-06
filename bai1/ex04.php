<?php

$username = "root";
$password = "";
$host = "localhost";
$dbname = "books";
try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
} catch (PDOException $e) {
    echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
}

$sql = "Select * From sach";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_NUM);

echo "<pre>";
var_dump($result);

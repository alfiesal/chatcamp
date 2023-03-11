<?php

include '../dupa.php';

$email = $_POST['email'];


$servername = "localhost";
$username = "root";
$password = PASSEK;
$dbname = "camp";

// tworzenie połączenia z bazą danych
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// ustawianie trybu raportowania błędów na wyjątki
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// przygotowanie zapytania SQL z parametrami powiązanymi
$stmt = $conn->prepare("INSERT INTO clients (email) VALUES (:email)");

// ustawienie wartości parametrów za pomocą metody bindParam
$stmt->bindParam(':email', $email);


// wykonanie zapytania SQL
$stmt->execute();


header('Location: thanks.php');
die();


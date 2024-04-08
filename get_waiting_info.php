<?php
include 'db_config.php'; // Assurez-vous que ce fichier contient les informations de connexion à votre base de données

$accessCode = $_GET['code'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT ... ;");

     $result = ['waitingTime' => $waitingTime, 'peopleAhead' => $peopleAhead];

    echo json_encode($result);
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
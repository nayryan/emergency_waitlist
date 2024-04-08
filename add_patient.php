<?php
include 'db_config.php'; 
// Récupère les données du formulaire
$name = $_POST['name'];
$age = $_POST['age'];
$severity = $_POST['severity'];

// Génère un code d'accès unique pour le patient
$accessCode = rand(100, 999);

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO patients (name, age, severity, accessCode) VALUES (?, ?, ?, ?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$name, $age, $severity, $accessCode]);

    echo "Nouveau patient ajouté avec succès.";
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
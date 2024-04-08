<?php
include 'db_config.php'; 

$accessCode = $_POST['access-code'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM patients WHERE accessCode = ?");
    $stmt->execute([$accessCode]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result) {
        // Redirige le patient vers sa page d'informations d'attente
        header('Location: patient.html?code='.$accessCode);
        exit();
    } else {
        echo "Code invalide.";
    }
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
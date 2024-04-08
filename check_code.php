<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=hospital_triage;charset=utf8', 'username', 'password');

// Récupération du code
$code = $_POST['access-code'];

// Requête pour trouver le patient par code
$query = $db->prepare("SELECT * FROM patients WHERE code = ?");
$query->execute([$code]);
$patient = $query->fetch();

echo "Votre temps d'attente estimé est : ...";
?>
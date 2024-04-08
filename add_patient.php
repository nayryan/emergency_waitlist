<?php
$name = $_POST['name'];
$age = $_POST['age'];
$severity = $_POST['severity'];

$query = $db->prepare("INSERT INTO patients (patientName, age, injurySeverity) VALUES (?, ?, ?)");
$query->execute([$name, $age, $severity]);

echo "Patient ajouté avec succès.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste d'attente - Administration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Liste d'attente - Administration</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Âge</th>
                    <th>Gravité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="patient-list">
                <?php
                // Récupérer et afficher les patients
                $patients = $db->query("SELECT * FROM patients ORDER BY arrivalTime ASC");
                foreach ($patients as $patient) {
                    echo "<tr><td>{$patient['patientName']}</td><td>{$patient['age']}</td><td>{$patient['injurySeverity']}</td><td>Actions</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button onclick="location.href='add-patient.html'">Ajouter un patient</button>
    </div>
</body>
</html>
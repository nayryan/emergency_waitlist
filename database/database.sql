CREATE TABLE patients(
    patientID INT AUTO_INCREMENT PRIMARY KEY,
    patientName VARCHAR(200) NOT NULL,
    code VARCHAR(3) NOT NULL,
    injurySeverity TINYINT NOT NULL CHECK (injurySeverity BETWEEN 1 AND 5), -- Supposition que la gravité va de 1 à 5
    arrivalTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    UNIQUE(code) -- Assurer que le code à 3 lettres est unique pour chaque patient
);
# Hospital Triage Application

## Overview
This document provides detailed instructions on how to set up and connect the Hospital Triage application to a database system. The application is built using PHP for server-side scripting, HTML and CSS for the frontend, and PostgreSQL as the database management system.

## Prerequisites
- XAMPP or any equivalent server stack that includes PHP and PostgreSQL.
- PostgreSQL or any SQL database service.

## Technologies Used
- **PHP**: Server-side scripting language.
- **HTML/CSS**: Frontend presentation.
- **PostgreSQL**: Database management system.
- **XAMPP**: Local server stack that can also be used for MySQL databases.

## Installation Steps

### Setting up the Server Environment
1. Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
2. Start the Apache and PostgreSQL services from the XAMPP control panel.

### Setting up PostgreSQL
1. Open the PostgreSQL shell from the XAMPP control panel or use `pgAdmin` for a graphical interface.
2. Create a new database for the application:
3. Create the necessary tables as defined in the `database.sql` file provided with the project.

### Configuring PHP to Connect to PostgreSQL
1. In your PHP code, configure the database connection parameters. Replace the MySQL PDO connection string with

## Utilisation de l'Application

### Pour les Patients

#### Vérifier le Temps d'Attente
1. Ouvrez votre navigateur et accédez à l'URL de l'application (par exemple, `http://localhost/hospital-triage/code.html`).
2. Entrez votre code d'accès à trois chiffres dans le champ prévu et cliquez sur "Valider".
3. Vous serez redirigé vers une page affichant votre temps d'attente estimé ainsi que le nombre de personnes devant vous.

#### Rafraîchir les Informations d'Attente
- Sur la page d'attente, cliquez sur le bouton "Rafraîchir" pour mettre à jour le temps d'attente et le nombre de personnes devant vous.

### Pour les Administrateurs

#### Ajouter un Nouveau Patient
1. Accédez à l'URL de l'interface d'administration (par exemple, `http://localhost/hospital-triage/form.html`).
2. Remplissez le formulaire avec les informations du patient : nom, âge et niveau de gravité.
3. Cliquez sur "Ajouter" pour enregistrer le patient dans la file d'attente.






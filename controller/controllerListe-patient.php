<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $patientsOBJ = new patients();
    $arrayPatients = $patientsOBJ->listPatients();
?>
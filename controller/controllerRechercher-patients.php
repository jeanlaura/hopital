<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $patientsOBJ = new patients();
    $arrayPatient = $patientsOBJ->listPatients(); //Tableau qui reprend la liste des patients
    $success = true;
    if (isset($_REQUEST['submit']) && isset($_POST['imputSearch'])) {
        $patientsOBJ->firstname = $_POST['imputSearch']; //Récupère l'input initialisé 
        if($patientsOBJ->searchPatients()){//Recherche du patient
            $success;
        }
    }
    /*if (isset($_POST['imputSearch'])) {
        $patientsOBJ->firstname = $_POST['imputSearch']; //Récupère l'input initialisé 
        if($patientsOBJ->searchPatients()){//Recherche du patient
            $success;
        }
    }*/
?>
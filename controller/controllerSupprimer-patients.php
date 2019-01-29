<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $patientsOBJ = new patients();
    $arrayPatient = $patientsOBJ->listPatients(); //Tableau qui reprend la liste des rdvs
    $success = true;
    if (isset($_GET['id'])) {
        $patientsOBJ->id = $_GET['id']; //Récupère id initialisé comme idAppointments
        if($patientsOBJ->deletePatients()){//Suppression du rdv
            $success;
        }
    }
?>
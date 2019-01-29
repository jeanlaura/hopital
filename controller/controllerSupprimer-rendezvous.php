<?php
    require_once 'models/database.php';
    require_once 'models/modelAjout-rendezvous.php';
    
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $appointmentsOBJ = new appointments();
    $arrayPatientRDV = $appointmentsOBJ->listAppointments(); //Tableau qui reprend la liste des rdvs
    $success = true;
    if (isset($_GET['idAppointment'])) {
        $appointmentsOBJ->id = $_GET['idAppointment']; //Récupère id initialisé comme idAppointments
        if($appointmentsOBJ->deleteAppointments()){//Suppression du rdv
            $success;
        }
    }
?>
<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    require_once 'models/modelAjout-rendezvous.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $idPatientExist = false;
    $idPatientRdv = false;
    $patientsOBJ = new patients();
    if(isset($_GET['id'])){
    	$patientsOBJ->id = $_GET['id'];
    	if (!$patientsOBJ->displayPatient()) {
            $idPatientExist = false;
    	} else {
            $patient = $patientsOBJ->displayPatient();
            $idPatientExist = true;
    	}
    }
    $appointmentsOBJ = new appointments();
    //$appointmentsOBJ->id = $_GET['id'];
    if(isset($idPatientExist)){
    	$appointmentsOBJ->id = $_GET['id'];
    	if (!$appointmentsOBJ->listAppointmentsByPatients()) {
            $idPatientRdv = false;
    	} else {
            $arrayPatientRDV = $appointmentsOBJ->listAppointmentsByPatients();
            $idPatientRdv = true;
    	}
    }
    //$arrayPatientRDV = $appointmentsOBJ->listAppointmentsByPatients();
?>
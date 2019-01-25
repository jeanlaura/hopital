<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    require_once 'models/modelAjout-rendezvous.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $idPatientExist = false;
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
    $arrayPatientRDV = $appointmentsOBJ->listAppointmentsByPatients();
?>
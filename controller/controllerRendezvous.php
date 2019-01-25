<?php
    require_once 'models/database.php';
    require_once 'models/modelAjout-rendezvous.php';
    require_once 'models/modelPatients.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $idExist = false;
    $patientsOBJ = new patients();
    $appointmentsOBJ = new appointments();
    if(isset($_GET['id'])){
    	$appointmentsOBJ->id = $_GET['id'];
    	if (!$appointmentsOBJ->displayAppointment() && !$patientsOBJ->displayPatient()) {
    		$idExist = false;
    	} else {
    		$rdv = $appointmentsOBJ->displayAppointment();
    		$idExist = true;
    	}
    }
?>
<?php
    require_once 'models/database.php';
    require_once 'models/modelPatients.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $idExist = false;
    $patientsOBJ = new patients();
    if(isset($_GET['id'])){
    	$patientsOBJ->id = $_GET['id'];
    	if (!$patientsOBJ->displayPatient()) {
    		$idExist = false;
    	} else {
    		$patient = $patientsOBJ->displayPatient();
    		$idExist = true;
    	}
    }
?>
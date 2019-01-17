<?php
	require_once 'models/database.php';
	require_once 'models/modelPatients.php';
	require_once 'models/modelAjout-rendezvous.php';
	// Instanciation de l'objet Hospital contenant les méthodes utilisées
	$patientsOBJ = new patients();
	$appointmentsOBJ = new appointments();
	$rendezvousSuccess = false; 
	$arrayPatientRDV = $patientsOBJ->listPatients();

	// Test des champs obligatoires
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // VALIDER
	    if (isset($_POST['submit'])) {
	        $patientsOBJ->addRDV(); // exécute la méthode permettant la mise à jour du patient
	        $rendezvousSuccess = true; // variable mise à true pour cacher le formulaire
	    }
	}
?>

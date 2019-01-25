<?php
	require_once 'models/database.php';
	require_once 'models/modelPatients.php';
	require_once 'models/modelAjout-rendezvous.php';
	// Instanciation de l'objet Hospital contenant les méthodes utilisées
	$patientsOBJ = new patients();
	$appointmentsOBJ = new appointments();
	$arrayPatientRDV = $appointmentsOBJ->listAppointments(); //Tableau qui reprend la liste des rdvs
    $arrayPatients = $patientsOBJ->listPatients(); //Tableau qui reprend la liste des patients
	if (isset($_GET['idAppointment'])) {
        $appointmentsOBJ->id = $_GET['idAppointment']; //Récupère id initialisé comme idAppointments
        $detailsRdv = $appointmentsOBJ->displayAppointment(); //Reprends les informations que pour un seul rdv
    }
    $updateRendezVous = false;
	$successPage = 'Rendez-vous modifié'; // message personnalisé pour la validation
	$link = 'liste-rendezvous.php';
	$linkText = 'des rendez-vous';
	// Variables pour l'horaire $dateTime
	$today = date('Y-m-d'); // variable servant à initialiser le calendrier à la date du jour
	$oneDateLater = date('Y-m-d', strtotime(date('Y-m-d') . ' +1 month')); // variable servant à délimiter la fin du calendrier
	$startHour = 8; // heure de début de rendez-vous
	$endHour = 10; // nombre d'heures à afficher pour une journée ouvrée +1
	// variable de récupération d'erreurs
	$arrayError = [];
	$regexDate = '/^(0[1-9]|((19|20)[0-9]{2})\-(0[1-9]|1[012])\-([1-2][0-9])|3[01])$/';
	$regexHour = '/([01]?[0-9]|2[0-3]):[0-5][0-9]/';
	// Test des champs obligatoires
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // PATIENT
	    if (empty($_POST['selectId'])) {
	        $arrayError['patientErr'] = 'Un patient est requis';
	    } else {
	        $inputID = test_input($_POST['selectId']);
	        unset($arrayError['patientErr']);
	    }


	    // JOUR
	    if (isset($_POST['inputDate'])){
	    	$dateInput = test_input($_POST['inputDate']);
	    	if ($dateInput < $today) {
	        	$arrayError['dayErr'] = 'La date est antérieur à la date d\'aujourd\'hui !';
	    	}
	    	if (!preg_match($regexDate, $dateInput)) {
	    		$arrayError['dayErr'] = 'Le format de la date est incorrect !';
	    	}
	    	if (empty($dateInput)) {
	    		$arrayError['dayErr'] = 'Veuillez insérer une date correct ! 😡';
	    	}
	    }


	    // HEURE
	    if (empty($_POST['selectTime'])) {
	        $arrayError['hourErr'] = 'Une heure est requise';
	    } else {
	        $hourInput = test_input($_POST['selectTime']);
	        if (!preg_match($regexHour, $hourInput)) {
	            $arrayError['hourErr'] = 'Une heure correcte est requise';
	        }
	    }

	    // VALIDER
	    if (isset($_POST['submit']) && count($arrayError) == 0) {
	    	$appointmentsOBJ->id = $_GET['idAppointment']; //id du rdv
	        $appointmentsOBJ->idPatients = $_POST['selectId']; // id du patient sélectionné
	        $appointmentsOBJ->dateHour = $dateInput . ' ' . $hourInput; // mise en forme pour l'ajout à la table appointments
	        //var_dump($_POST['selectId']);
	        $testDoubleEntry = $appointmentsOBJ->modifyAppointment(); // exécute la méthode permettant la modification du rendez-vous
	        if ($testDoubleEntry === false) {
	            $updateRendezVous = false; // variable mise à false
	        } else {
	            $updateRendezVous = true; // variable mise à true pour cacher le formulaire
	        }
	    }
	}
	// fonction de sécurisation de la saisie, injection de code, espaces et antislashs
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<?php
    require_once 'models/database.php';
    require_once 'models/modelAjout-rendezvous.php';
    // Instanciation de l'objet Hospital contenant les méthodes utilisées
    $appointmentsOBJ = new appointments();
    $arrayRDV = $appointmentsOBJ->listAppointments();
?>

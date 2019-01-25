<?php
    class appointments extends database {
        // champs de la table patients
        public $id;
        public $dateHour;
        public $idPatients;

        // Exercice5
        /**
         * Méthode permettant d'ajouter un rendez-vous
         * @return Exécute la requête pour ajouter un rendez-vous
         */
        function addRDV() {
            $sql = $this->database->prepare('INSERT INTO `appointments` (dateHour, idPatients) VALUES (:dateHour, :idPatients)');
            $sql->bindValue(':dateHour',$this->dateHour,PDO::PARAM_STR);
            $sql->bindValue(':idPatients',$this->idPatients,PDO::PARAM_INT);
            return $sql->execute();
        }
        
        // Exercice6
        //table mis avant les attributs car sinon il ne prend pas la bonne Table et ne nous affichera pas les bonnes informations
        function listAppointments() {
            $sql = $this->database->query('SELECT `appointments`.`id`, `appointments`.`dateHour`, `patients`.`lastname`, `patients`.`firstname` FROM `appointments` INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id` ORDER BY `appointments`.`dateHour`');
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }
        
        // Exercice7
        //champ dateHour modifié et explosé en deux pour récupérer la date et l'heure séparemment
        function displayAppointment() {
            $sql = $this->database->prepare('SELECT `appointments`.`id`, DATE_FORMAT(`appointments`.`dateHour`, "%Y-%m-%d") as `date`, DATE_FORMAT(`appointments`.`dateHour`, "%H:%i") as `hour`, `patients`.`lastname`, `patients`.`firstname`, `appointments`.`idPatients` FROM `appointments` INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id` WHERE `appointments`.`id` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->execute();
            $data = $sql->fetch(PDO::FETCH_OBJ);
            return $data;
        }

        // Exercice8
        //idPatients aide à récupérer les infos du patients sans appeler la table patients pour ne pas la modifié
        function modifyAppointment() {
            $sql = $this->database->prepare('
                UPDATE `appointments` SET `appointments`.`dateHour`=:dateHour, `appointments`.`idPatients`=:idPatients WHERE `appointments`.`id` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->bindValue(':dateHour',$this->dateHour,PDO::PARAM_STR);
            $sql->bindValue(':idPatients',$this->idPatients,PDO::PARAM_INT);
            return $sql->execute();
        }

        //EXERCICE9
        //Liste des rdv dans la fiche patient
        function listAppointmentsByPatients() {
            $sql = $this->database->prepare('SELECT `appointments`.`id`, `appointments`.`dateHour`, `appointments`.`idPatients`, `patients`.`lastname`, `patients`.`firstname` FROM `appointments` INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id` WHERE `appointments`.`idPatients` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>
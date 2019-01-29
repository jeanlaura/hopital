<?php
    class patients extends database {
        // champs de la table patients
        public $id;
        public $lastname;
        public $firstname;
        public $birthdate;
        public $phone;
        public $mail;
        /**
         * Méthode permettant d'ajouter un patient
         * @return exécute la requête pour ajouter un patient
         */
        function addPatient() {
            //
            $sql = $this->database->prepare('INSERT INTO `patients` (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)');
            $sql->bindValue(':lastname',$this->lastname,PDO::PARAM_STR);
            $sql->bindValue(':firstname',$this->firstname,PDO::PARAM_STR);
            $sql->bindValue(':birthdate',$this->birthdate,PDO::PARAM_STR);
            $sql->bindValue(':phone',$this->phone,PDO::PARAM_STR);
            $sql->bindValue(':mail',$this->mail,PDO::PARAM_STR);
            return $sql->execute();
        }
        // Exercice2
        function listPatients() {
            $sql = $this->database->query('SELECT * FROM `patients`');
            $result = $sql->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        // Exercice3
        function displayPatient() {
            $sql = $this->database->prepare('SELECT * FROM `patients` WHERE `id` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->execute();
            $data = $sql->fetch(PDO::FETCH_OBJ);
            return $data;
        }
        // Exercice4
        function ModifyPatient() {
            $sql = $this->database->prepare('UPDATE `patients` SET `lastname`=:lastname, `firstname`=:firstname, `birthdate`=:birthdate, `phone`=:phone, `mail`=:mail WHERE `id` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->bindValue(':lastname',$this->lastname,PDO::PARAM_STR);
            $sql->bindValue(':firstname',$this->firstname,PDO::PARAM_STR);
            $sql->bindValue(':birthdate',$this->birthdate,PDO::PARAM_STR);
            $sql->bindValue(':phone',$this->phone,PDO::PARAM_STR);
            $sql->bindValue(':mail',$this->mail,PDO::PARAM_STR);
            return $sql->execute();
        }
        //EXERCICE11
        //SUPRESSION DES PATIENTS OUI OUI OUI !
        function deletePatients() {
            $sql = $this->database->prepare('DELETE FROM `patients` WHERE `id` = :id');
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>


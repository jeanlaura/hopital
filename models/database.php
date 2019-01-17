<?php
    /**
     * Classe permettant la connexion avec la base de donnée
     * @return Methods
     */ 
    class database {
        public $database;
        // Ce qui va être exécuté en premier lors de l'instanciation de la classe
        public function __construct() {
            try {
                // variables stockant les paramètres de connexions à la base
                $db_config = array();
                $db_config['SGBD'] = 'mysql';
                $db_config['HOST'] = 'localhost'; // le chemin vers le serveur
                $db_config['DB_NAME'] = 'hospitale2n'; // le nom de votre base de données
                $db_config['USER'] = 'root'; // nom d'utilisateur pour se connecter
                $db_config['PASSWORD'] = ''; // mot de passe de l'utilisateur pour se connecter
                $db_config['OPTIONS'] = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ); // Affiche les erreurs SQL
                // Mise en relation avec la base de donnée
                $this->database = new PDO($db_config['SGBD'].':host='.$db_config['HOST'].';dbname='.$db_config['DB_NAME'].';charset=UTF8', $db_config['USER'], $db_config['PASSWORD']);
                unset($db_config);
            } catch (Exception $error) {
                // récupération des erreurs
                die('Erreur : '.$error->getMessage());
            }
        }
        // Ce qui va être exécuté en dernier lors de l'instanciation de la classe
        public function __destruct() {
            $this->database = NULL;
        }
    }
?>
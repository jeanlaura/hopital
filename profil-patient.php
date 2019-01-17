<?php
    require_once 'controller/controllerProfil-patient.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 - Partie 2</title>
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    </head>
    <body>
        <h1>PATIENTS</h1>
        <!-- NAV -->
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <?php if(!$idExist){ ?>
                        <h1>Ce patient n'existe pas !</h1>
                        <a href="liste-patient.php" class="btn btn-primary">Retour liste patients</a>
                    <?php }else{ ?>
                        <!-- Card -->
                        <div class="card">
                            <!-- Card content -->
                            <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">
                                        <a>
                                            <?= $patient->lastname ?> <?= $patient->firstname ?>
                                        </a>
                                    </h4>
                                    <!-- Text -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div>
                                            <i class="fas fa-laptop mr-4 pr-3"></i>
                                            <p class="card-text">Nom : <?= $patient->lastname ?></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div>
                                            <i class="fas fa-bomb mr-5"></i>
                                            <p class="card-text">Prénom : <?= $patient->firstname ?></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div>
                                            <i class="fas fa-code mr-5"></i>
                                            <p class="card-text">Adresse de messagerie : <?= $patient->mail ?></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div>
                                            <i class="far fa-gem mr-5"></i>
                                            <p class="card-text">Date de naissance : <?= $patient->birthdate ?></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div>
                                            <i class="fas fa-cogs mr-5"></i>
                                            <p class="card-text">Numéro de téléphone : <?= $patient->phone ?></p>
                                        </li>
                                    </ul>
                                    <!-- Button -->
                                    <a href="modifier-patient.php?id=<?= $patient->id ?>" class="btn btn-warning">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                    <a href="liste-patient.php" class="btn btn-primary">Retour à la liste des patients</a>
                            </div>
                        </div>
                        <!-- Card -->
                    <?php } ?>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

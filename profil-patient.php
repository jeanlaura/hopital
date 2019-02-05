<?php
    require_once 'controller/controllerProfil-patient.php';
?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row">
        <div class="col align-self-center">
            <?php if(!$idPatientExist){ ?>
                <h1>Ce patient n'existe pas !</h1>
                <a href="liste-patient.php" class="btn btn-primary">Retour liste patients</a>
            <?php }else{ ?>
                <!-- Card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header headerCard">
                        <!-- Title -->
                        <h4 class="card-title" align="center">
                            <a>
                                <?= $patient->lastname ?> <?= $patient->firstname ?>
                            </a>
                        </h4>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Text -->
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Nom : <?= $patient->lastname ?></p>
                            </li>
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Prénom : <?= $patient->firstname ?></p>
                            </li>
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Adresse de messagerie : <?= $patient->mail ?></p>
                            </li>
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Date de naissance : <?= $patient->birthdate ?></p>
                            </li>
                            <li class="list-group-item">
                                <!-- <div class="md-v-line"></div> -->
                                <p class="card-text">Numéro de téléphone : <?= $patient->phone ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer" align="right">
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
    <div class="row">
        <div class="col align-self-center">
            <!-- Card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header headerCard">
                    <!-- Title -->
                    <h4 class="card-title" align="center">
                        <a>
                            Liste des rendez-vous
                        </a>
                    </h4>
                </div>
                <!-- Card content -->
                <div class="card-body">
                    <!-- Text -->
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <?php if(!$idPatientRdv){ ?>
                                <h1>Ce patient n'a pas de rendez-vous !</h1>
                            <?php }else{ ?>
                                <?php foreach ($arrayPatientRDV as $rdv) { ?>
                                    <p class="card-text">Date de rendez-vous : <?= $rdv->dateHour ?></p>
                                <?php } ?>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>    
</div>
<?php include 'footer.php'; ?>
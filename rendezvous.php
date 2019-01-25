<?php require_once 'controller/controllerRendezvous.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row">
        <div class="col align-self-center">
            <?php if(!$idExist){ ?>
                <h1>Ce rendez-vous n'existe pas ! Dommage pour toi 😂 T'es vraiment trop nul !</h1>
                <a href="liste-rendezvous.php" class="btn btn-primary">Retour liste des rendez-vous</a>
            <?php }else{ ?>
                <!-- Card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header headerCard">
                        <!-- Title -->
                        <h4 class="card-title" align="center">
                            <a>
                                <?= $rdv->lastname ?> <?= $rdv->firstname ?>
                            </a>
                        </h4>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Text -->
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Nom : <?= $rdv->lastname ?></p>
                            </li>
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Prénom : <?= $rdv->firstname ?></p>
                            </li>
                            <li class="list-group-item">
                                <div class="md-v-line"></div>
                                <p class="card-text">Date et heure du rendez-vous : <?= $rdv->date ?> <?= $rdv->hour ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer" align="right">
                        <!-- Button -->
                        <a href="modifier-rendezvous.php?idAppointment=<?= $rdv->id ?>" class="btn btn-warning">Modifier</a>
                        <a href="" class="btn btn-danger">Supprimer</a>
                        <a href="liste-rendezvous.php" class="btn btn-primary">Retour à la liste des rendrez-vous</a>
                    </div>
                </div>
                <!-- Card -->
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
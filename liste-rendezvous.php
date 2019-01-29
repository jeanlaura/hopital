<?php require_once 'controller/controllerListe-rendezvous.php'; ?>
<?php require_once 'controller/controllerSupprimer-rendezvous.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="content-wrap marginTop">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <table  class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> Nom </th>
                            <th scope="col"> Prénom </th>
                            <th scope="col"> Date et heure </th>
                            <th scope="col"> Informations </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($arrayRDV as $rdv) { ?>
                            <tr>
                                <th scope="row"> <?= $rdv->lastname ?> </th>
                                <th><?= $rdv->firstname ?></th>
                                <th><?= $rdv->dateHour ?></th>
                                <th>
                                    <a href="rendezvous.php?id=<?= $rdv->id ?>" class="btn btn-success" >Afficher</a>
                                    <a href="supprimer-rendezvous.php?idAppointment=<?= $rdv->id ?>" class="btn btn-danger" >Supprimer</a>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
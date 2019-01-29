<?php require_once 'controller/controllerListe-patient.php'; ?>
<?php require_once 'controller/controllerSupprimer-patients.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row">
        <div class="col align-self-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> Nom </th>
                        <th scope="col"> Prénom </th>
                        <th scope="col"> Informations </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayPatients as $row) { ?>
                        <tr>
                            <th scope="row"> <?= $row->lastname ?> </th>
                            <th><?= $row->firstname ?></th>
                            <th>
                                <a href="profil-patient.php?id=<?= $row->id ?>" class="btn btn-success" >Afficher</a>
                                <a href="supprimer-patients.php?id=<?= $row->id ?>" class="btn btn-danger" >Supprimer</a>
                            </th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

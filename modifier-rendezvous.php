<?php require_once 'controller/controllerModifier-rendezvous.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if ($updateRendezVous) { ?>
                    <?php include('success.php'); ?>
            <?php } else {
                ?>
                <form class="grey lighten-1" name="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header elegant-color-dark headerCard" role="tab" id="heading1" align="center">
                            <h1 class="mb-0 mt-3 grey-text">Modifier rendez-vous</h1>
                            <?php //var_dump($arrayPatientRDV);
                            //var_dump($detailsRdv); ?>
                        </div>
                        <!-- Card body -->
                        <div class="card-body pt-0 grey lighten-1">
                            <div class="form-row">
                                <div class="md-form col-md-6">
                                    <h2>Patient concerné :<span class="red-text">* <?= isset($arrayError['patientErr']) ? $arrayError['patientErr'] : ''; ?></span></h2>
                                    <!-- SELECT qui permet de changer et d'afficher tous les patients en cas de modification de celui-ci -->
                                    <select id="selectId" name="selectId" class="form-control" >
                                        <!-- Foreach qui permet de récupérer les patients et d'avoir en selected celui avec l'id correspondant dans l'url -->
                                        <?php foreach ($arrayPatients as $patient) { ?>
                                            <option value="<?= $patient->id ?>" <?= $patient->id == $detailsRdv->idPatients ? 'selected' : '' ?>><?= $patient->firstname ?> <?= $patient->lastname ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="md-form col-md-6">
                                    <h2>Créneau horaire de rendez-vous :</h2>
                                    <!-- JOUR / NUIT -->
                                    <div>Jour<span class="red-text">* <?= isset($arrayError['dayErr']) ? $arrayError['dayErr'] : ''; ?></span></div>
                                    <input class="form-control" type="date" name="inputDate" id="inputDate" value="<?= isset($_POST['inputDate']) ? $_POST['inputDate'] : $detailsRdv->date ?>" />
                                    <!-- HEURES / MINUTES -->
                                    <div>Heure<span class="red-text">* <?= isset($arrayError['hourErr']) ? $arrayError['hourErr'] : ''; ?></span></div>
                                    <input class="form-control" type="time" name="selectTime" id="selectTime" value="<?= isset($_POST['selectTime']) ? $_POST['selectTime'] : $detailsRdv->hour ?>" />
                                </div>
                            </div>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer elegant-color-dark" role="tab" id="footing1">
                            <div class="form-row elegant-color-dark">
                                <div class="md-form col-md-12">
                                    <div id="requiredField">
                                        <button type="submit" name="submit" class="btn btn-success grey validate">Envoyer</button>
                                        <a href="liste-rendezvous.php" class="btn btn-danger">Annuler</a>
                                        <span class="red-text">* champs requis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

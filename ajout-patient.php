<?php require_once 'controller/controllerAjout-patient.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row justify-content-center marginTop">
        <div class="col-md-8">
            <?php if ($addSuccess) { ?>
                <p>Patient bien ajouté !</p>
            <?php } else { ?>
                <form class="form" name="form" id="profileForm" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header headerCard" role="tab" id="heading1" align="center">
                            <h2 class="mb-0 mt-3">Coordonnées patient</h2>
                        </div>
                        <div class="card-body pt-0 lighten-1">
                            <div class="form-row">
                                <div class="md-form col-md-6">
                                    <label for="inputLastname">Nom <span class="red-text">* <?= isset($arrayError['lastnameErr']) ? $arrayError['lastnameErr'] : ''; ?></span></label>
                                    <input class="form-control" id="inputLastname" type="text" name="inputLastname" value="<?= count($arrayError) != 0 ? $patientsOBJ->lastname : ''; ?>" />
                                </div>
                                <div class="md-form col-md-6">
                                    <label for="inputFirstname">Prénom <span class="red-text">* <?= isset($arrayError['firstnameErr']) ? $arrayError['firstnameErr'] : ''; ?></span></label>
                                    <input class="form-control" id="inputFirstname" type="text" name="inputFirstname" value="<?= count($arrayError) != 0 ? $patientsOBJ->firstname : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="md-form col-md-6">
                                    <label for="inputPhone">Téléphone <span class="red-text">* <?= isset($arrayError['phoneErr']) ? $arrayError['phoneErr'] : ''; ?></span></label>
                                    <input class="form-control" id="inputPhone" type="text"  name="inputPhone" value="<?= count($arrayError) != 0 ? $patientsOBJ->phone : ''; ?>" />
                                </div>
                                <div class="md-form col-md-6">
                                    <label class="active" for="inputBirthdate">Date de naissance <span class="red-text">* <?= isset($arrayError['birthdateErr']) ? $arrayError['birthdateErr'] : ''; ?></span></label>
                                    <input class="form-control" id="inputBirthdate" type="date"  name="inputBirthdate" value="<?= count($arrayError) != 0 ? $patientsOBJ->birthdate : ''; ?>" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="md-form col-md-12">
                                    <label for="inputEmail">Email <span class="red-text">* <?= isset($arrayError['emailErr']) ? $arrayError['emailErr'] : ''; ?></span></label>
                                    <input class="form-control" id="inputEmail" type="email" name="inputEmail" value="<?= count($arrayError) != 0 ? $patientsOBJ->mail : ''; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" role="tab" id="footing1">
                            <div class="form-row">
                                <div class="md-form col-md-12">
                                    <button type="submit" name="submit" class="btn btn-success validate">Envoyer</button>
                                    <span class="red-text" id="requiredField">* champs requis</span>
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

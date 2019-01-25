<?php require_once 'controller/controllerModifier-patient.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="container marginTop">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if ($updateSuccess) { ?>
                <p>Patient bien modifié !</p>
            <?php } else { ?>
                <form class="form" name="form" id="profileForm" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header headerCard" role="tab" id="heading1" align="center">
                            <h2 class="mb-0 mt-3">Coordonnées patient</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body pt-0 lighten-1">
                            <div class="form-row">
                                <div class="md-form col-md-6">
                                    <label for="inputLastname">Nom&nbsp;
                                        <span class="red-text">* <?= isset($arrayError['lastnameErr']) ? $arrayError['lastnameErr'] : ''; ?></span>
                                    </label>
                                    <input class="form-control" id="inputLastname" type="text" name="inputLastname" value="<?= isset($_POST['inputLastname']) ? $_POST['inputLastname'] : $patient->lastname ?>" />
                                </div>
                                <div class="md-form col-md-6">
                                    <label for="inputFirstname">Prénom&nbsp;
                                        <span class="red-text">* <?= isset($arrayError['firstnameErr']) ? $arrayError['firstnameErr'] : ''; ?></span>
                                    </label>
                                    <input class="form-control" id="inputFirstname" type="text" name="inputFirstname" value="<?= isset($_POST['inputFirstname']) ? $_POST['inputFirstname'] : $patient->firstname ?>" />
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="md-form col-md-6">
                                    <label for="inputPhone">Téléphone&nbsp;
                                        <span class="red-text">* <?= isset($arrayError['phoneErr']) ? $arrayError['phoneErr'] : ''; ?></span>
                                    </label>
                                    <input class="form-control" id="inputPhone" type="text"  name="inputPhone" value="<?= isset($_POST['inputPhone']) ? $_POST['inputPhone'] : $patient->phone ?>" />
                                </div>
                                <div class="md-form col-md-6">
                                    <label for="inputBirthdate">Date de naissance&nbsp;
                                        <span class="red-text">* <?= isset($arrayError['birthdateErr']) ? $arrayError['birthdateErr'] : ''; ?></span>
                                    </label>
                                    <input class="form-control" id="inputBirthdate" type="date"  name="inputBirthdate" value="<?= isset($_POST['inputBirthdate']) ? $_POST['inputBirthdate'] : $patient->birthdate ?>" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="md-form col-md-12">
                                    <label for="inputEmail">Email&nbsp;
                                        <span class="red-text">* <?= isset($arrayError['emailErr']) ? $arrayError['emailErr'] : ''; ?></span>
                                    </label>
                                    <input class="form-control" id="inputEmail" type="email" name="inputEmail" value="<?= isset($_POST['inputEmail']) ? $_POST['inputEmail'] : $patient->mail ?>" />
                                </div>
                            </div>
                        </div>
                        <!-- Card footer -->
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

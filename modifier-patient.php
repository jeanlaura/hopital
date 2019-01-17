<?php
    require_once 'controller/controllerModifier-patient.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Custom templates -->
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <!-- NAV -->
        <a href="index.php" class="btn btn-primary" >Accueil</a>
        <a href="liste-patient.php" class="btn btn-primary" >Liste des patients</a>
        <!-- CONTENT PAGE -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php if ($updateSuccess) { ?>
                        <p>Patient bien modifié !</p>
                    <?php } else { ?>
                        <form class="form" name="form" id="profileForm" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="heading1">
                                    <h2 class="mb-0 mt-3">Coordonnées patient</h2>
                                </div>
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
                            </div>
                            <div class="form-row">
                                <div class="md-form col-md-12">
                                    <button type="submit" name="submit" class="btn validate">Envoyer</button>
                                    <div id="requiredField"><span class="red-text">* champs requis</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- JQuery CDN -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="popup.js"></script>!-->
    </body>
</html>

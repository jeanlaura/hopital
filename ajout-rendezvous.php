<?php
require_once 'controller/controllerAjout-rendezvous.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 - Partie 2</title>
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    </head>
    <body>
        <!-- CONTENT PAGE -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php if ($rendezvousSuccess) { ?>
                        <h1>Rendez-vous, bien ajouté !</h1>
                    <?php } else {
                        ?>
                        <form class="grey lighten-1" name="form" id="profileForm" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header elegant-color-dark" role="tab" id="heading1">
                                    <h2 class="mb-0 mt-3 grey-text">Ajouter rendez-vous</h2>
                                </div>
                                <div class="card-body pt-0 grey lighten-1">
                                    <div class="form-row">
                                        <div class="md-form col-md-6">
                                            <select class="form-control">
                                                <option value="" disabled selected>--Choisissez un patient--</option>
                                                <?php foreach ($arrayPatientRDV as $row) { ?>
                                                    <option value="<?= $row->id ?>"><?= $row->firstname ?> <?= $row->lastname ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="md-form col-md-6">
                                            <label class="active" for="datetimepicker_mask">Heure du rendez-vous</label>
                                            <input type="time" value="" id="datetimepicker_mask"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row elegant-color-dark">
                                    <div class="md-form col-md-12">
                                        <button type="submit" name="submit" class="btn grey validate">Envoyer</button>
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript" src="timePicker.js"></script>
    </body>
</html>

<?php
    require_once 'controller/controllerListe-patient.php';
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
        <!-- Custom templates -->
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PATIENTS</h1>
        <!-- NAV -->
        <a href="index.php" class="btn btn-primary">Retour accueil</a>
        <a href="ajout-patient.php" class="btn btn-primary">Retour saisie patient</a>
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <table  class="table table-striped">
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
                                        <a href="" class="btn btn-danger" >Supprimer</a>
                                    </th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

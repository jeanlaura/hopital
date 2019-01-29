<?php require_once 'controller/controllerSupprimer-rendezvous.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="content-wrap marginTop">
    <div class="container">
        <div class="row">
            <?php
                if ($success){
                    echo 'Votre rendez-vous à bien été supprimé !';
                }else{
                    echo 'Espèce de noob, t\'es nul, ça à pas marché ! ET BIM !';
                }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
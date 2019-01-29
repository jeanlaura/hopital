<?php require_once 'controller/controllerSupprimer-patients.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="content-wrap marginTop">
    <div class="container">
        <div class="row">
            <?php
                if ($success){
                    echo 'Votre patient à bien été supprimé !';
                }else{
                    echo 'Espèce de noob, t\'es nul, ça n\'a pas marché ! ET BIM !';
                }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<?php require_once 'controller/controllerRechercher-patients.php'; ?>
<?php include 'header.php'; ?>
<!-- CONTENT PAGE -->
<div class="content-wrap marginTop">
    <div class="container">
        <div class="row">
            <?php
                if ($success){
            ?>
            <p>Votre recherche de patient à donner ce résultat :</p>
            <p><?= $success ?></p>
            <?php
                }else{
                    echo 'Espèce de noob, t\'es nul, ça n\'a pas marché ! ET BIM !';
                }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
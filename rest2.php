<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if(isset($POST['validForm'])){
        $pseudo=$POST['pseudo_utilisateur'];
        $mdp=$POST['mdp_utilisateur'];
        echo "le pseudo vaut ".$pseudo;
        echo "le mdp vaut ".$mdp;

        }
        
?>
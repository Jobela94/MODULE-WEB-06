<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
        if (isset($_POST['inscription'])){
            foreach($_POST as $key=>$values){
                $$key = $values;
            }
        $bdd = new mysqli("172.20.183.207","joel","joel","MW04_drone");
        $req = "Insert into utilisateur(nom, prenom, pseudo, email, mdp, naissance) values ('$nom_utilisateur', '$prenom_utilisateur', '$pseudo_utilisateur', '$mail_utilisateur', '$mdp_utilisateur', '$date_utilisateur')";
        $res=$bdd->query($req);
        if($_res == 0){
        echo " Echec";
        }
        else {
      print_r($_res);
    }
}

?>
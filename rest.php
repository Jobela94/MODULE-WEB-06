
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_POST['validForm'])){
    $pseudo=$_POST['pseudo_utilisateur'];
    $mysqli = new mysqli("172.20.21.207","joel","joel","MW04_drone");
    $req = "select nom,prenom from utilisateur where pseudo='$pseudo'";
    $mdp=$_POST['mdp_utilisateur'];
    $res=$mysqli->query($req);
    $rep=$res->fetch_assoc();
    if($res->num_rows == 0){
        echo "Erreur d'authentification";
       header('Location:index.php?erreur=PseudoConnexion');
        $_GET['erreur'];
    } 

    else {
        print_r($rep);
        header('Location:index.php');
    }


}
?>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
        if (isset($_POST['inscription'])){
            foreach($_POST as $key=>$values){
                $$key = $values;
            }
        $bdd = new mysqli("172.20.21.207","joel","joel","MW04_drone");
        $req = "Insert into utilisateur(nom, prenom, pseudo, email, mdp, naissance) values ('$nom_utilisateur', '$prenom_utilisateur', '$pseudo_utilisateur', '$mail_utilisateur', '$mdp_utilisateur', '$date_utilisateur')";
        $res=$bdd->query($req);
        if($res->num_rows == 0){
        echo " Erreur lors de l'inscription";
      header('Location:index.php?erreur=PseudoInscription');
        }
        else {
      print_r($res);
    }

}

?>

<?php
        //si l'utilisateur  à cliqué sur drone sur la page web

        session_start();

        if (isset($_GET['drone'])){

            $_SESSION['module']="MW06";
          
            $bdd = new mysqli("172.20.21.207","joel","joel","MW06_drone");
            $req= "SELECT COUNT(idddrone) FROM drone";
            $rep = $bdd->query($req);
            $res = $rep->fetch_assoc();

            //var_dump($res);
            //echo $res["COUNT(idddrone)"];
            $_SESSION['nbdrone']= $res["COUNT(idddrone)"];

			echo "la variable de session 'module' vaut ".$_SESSION["nbdrone"];
    
        }
        
        
    
		?>

<?php
        //si l'utilisateur  à cliqué sur drone sur la page web

        session_start();

        if (isset($_GET['idvol'])){

            $_SESSION['module']="MW06";
          
            $bdd = new mysqli("172.20.21.207","joel","joel","MW06_drone");
            $req= "SELECT COUNT(idvol) FROM vol";
            $rep = $bdd->query($req);
            $res = $rep->fetch_assoc();
            //var_dump($res);
            //echo $res["COUNT(idddrone)"];

            $_SESSION['nbvol']= $res["COUNT(idvol)"];
		{
	
            echo "la variable de session 'module' vaut ".$_SESSION['nbvol'];
        }
        
        
    }
		?>

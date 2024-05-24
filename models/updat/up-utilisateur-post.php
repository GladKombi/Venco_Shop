<?php
  include('../../connexion/connexion.php');

  if(isset($_POST['valider']) && !empty($_GET['iduser'])){
    $id=$_GET['iduser'];
    $nom=htmlspecialchars($_POST['nom']);
    $postnom=htmlspecialchars($_POST['postnom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $genre=htmlspecialchars($_POST['genre']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $telephone=htmlspecialchars($_POST['telephone']);
    $email=htmlspecialchars($_POST['email']);
    $pwd=htmlspecialchars($_POST['pwd']);
    $fonction=htmlspecialchars($_POST['fonction']);
    $boutique=htmlspecialchars($_POST['boutique']);
    //select data from database
      
    $req=$connexion->prepare("UPDATE `utilisateur` SET  nom=?,postnom=?,prenom=?,genre=?,adresse=?,telephone=?,email=?,pwd=?,boutique=?, fonction=? WHERE id='$id'");
    $resultat=$req->execute([$nom,$postnom,$prenom,$genre,$adresse,$telephone,$email,$pwd,$boutique, $fonction]);
    if($resultat==true){
      $msg="Modification réussie";
      $_SESSION['msg']=$msg;
      header("location:../../views/utilisateur.php");
    }
  }
  else{
    header("location:../../views/utilisateur.php");
  }
?>
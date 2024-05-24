<?php
include('../../connexion/connexion.php');

if(isset($_POST['valider'])){
    $nom=htmlspecialchars($_POST['nom']);
    $postnom=htmlspecialchars($_POST['postnom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $genre=htmlspecialchars($_POST['genre']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $telephone=htmlspecialchars($_POST['telephone']);
   
     //select data from database
    
      $req=$connexion->prepare("INSERT INTO fornisseur( `nom`, `postnom`, `prenom`, `genre`, `adresse`, `telephone`) values (?,?,?,?,?,?)");
      $req->execute([$nom,$postnom,$prenom,$genre,$adresse,$telephone]);
      if($req){
          echo "<script>alert('Opération réussi')</script>";
          header("location:../../views/fournisseur.php");
      }
}
?>
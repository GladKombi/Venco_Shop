<?php 
    include '../connexion/connexion.php';
    #Appel de la page qui fait les affichages
    require_once('../models/select/select-entree.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$title?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php require_once('style.php'); ?>
</head>

<body>
    <!-- Appel de menues  -->
    <?php require_once('aside.php') ?>

    <main id="main" class="main">
        <div class="row">
            <div class="col-12">
                <h4><?=$title?></h4>
            </div>
            <!-- pour afficher les massage  -->
            <?php if(isset($msg)){ ?>
            <div class="alert-info alert text-center"><?php  echo $msg;$_SESSION['msg']="";?></div>
            <?php } ?>
            <!-- Le form qui enregistrer les données  -->
            <div class="col-xl-12 ">
            <form action="<?=$action ?>"  method="POST" enctype="multipart/form-data" class="shadow p-3">
                    <div class="row">                        
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Selectionner un produit <span class="text-danger">*</span></label>
                            <select required name="produit"  class="form-select">
                                <?php 
                                    $_getProduit=$connexion->prepare("SELECT catproduit.id, catproduit.`description`, typeproduit.description,catproduit.id  FROM typeproduit,`catproduit` 
                                    WHERE catproduit.typeproduit=typeproduit.id AND catproduit.supprimer=? AND typeproduit.statut=?");
                                    $_getProduit->execute([0, 0]);

                                    foreach($_getProduit as $_Prod){
                                        ?> <option value="<?=$_Prod[0]?>"><?=$_Prod[2]?> <?=$_Prod[1]?></option><?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Quantité <span class="text-danger">*</span></label>
                            <input autocomplete="off" required type="number" class="form-control" placeholder="Entrez la quantite"  name="qte" <?php if(isset($id)){?> value="<?=$ent['quantite']?>"<?php } ?>>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Prix <span class="text-danger">*</span></label>
                            <input autocomplete="off" required type="text" class="form-control" placeholder="Entrez le Prix" name="prix"  <?php if(isset($id)){?> value="<?=$ent['prix']?>"<?php } ?>> 
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Photo <span class="text-danger">*</span></label>
                            <input required type="file" class="form-control" name="photo" placeholder="Selectionner une photo">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                           <input type="submit" class="btn btn-dark w-100" name="<?=$btn?>" value="<?=$btn?>">
                        </div>
                    </div>
                </form>
            </div>
            <!-- La table qui affiche les données  -->
            <div class="col-xl-12 table-responsive px-3 mt-3">
                <table class="table table-sm text-center shadow">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Dates</th>
                            <th>Description</th>
                            <th>Quantite</th>
                            <th>Prix</th>
                            <th>Total</th>
                            <th>Boutique</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $nb=0;
                        while($entree=$_getData->fetch()){
                            $nb++;
                        ?>
                        <tr>
                            <th><?=$nb ?></th>
                            <td><?=$entree['date']; ?></td>
                            <td><?=$entree['description']; ?></td>
                            <td><?=number_format($entree['quantite'], 0); ?></td>
                            <td><?=number_format($entree['5'], 2); ?> $</td>
                            <td><?=number_format($entree['total'], 2); ?> $</td>
                            <td><?=$entree['6']; ?></td>
                            <td>
                                <a href="entree.php?id=<?php echo $entree['id'] ?>" class="btn btn-dark btn-sm mb-2"><i class="bi bi-pencil-square"></i></a>
                                <a onclick=" return confirm('Voulez-vous vraiment supprimer')" href="../models/delete/del-entree-post.php?iddel=<?php echo $entree['id'] ?>" class="btn btn-danger btn-sm "><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php  } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main><!-- End #main -->
    <?php require_once('script.php') ?>

</body>

</html>
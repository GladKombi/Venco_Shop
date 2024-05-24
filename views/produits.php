<?php 
    include '../connexion/connexion.php';//Se connecter à la BD
    #Appel de la page qui permet de faire les affichages
    require_once('../models/select/select-produit.php');
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
            <h4 class=""><?=$title?></h4>
            </div>
            <!-- pour afficher les massage  -->
            <?php
                /**
                 * Ici il s'agit de verifier si il y a une variable session msg et sa valeur est != de  vide
                 * or que c'est cette variable qui contient les messages, si la condition est 
                 * true, on affiche cet message
                 */
                if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                    ?><div class="alert-info alert text-center"><?=$_SESSION['msg']?></div><?php
                }
                unset($_SESSION['msg']);#Cette ligne permet de vider la valeur qui se trouve dans la session message
            ?>
            <div class="col-xl-12 ">
            <form class="shadow p-3" action="<?=$url?>" method="POST">
                    <div class="row">                       
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Catégorie <span class="text-danger">*</span></label>
                            <select required name="categorie" id="" class="form-select" 
                                <?php if (isset($_GET['idpro'])) { ?>
                                value="<?php echo $tab['typeproduit']; ?> <?php }?>">
                                <?php 
  
                                    $rep=$connexion->prepare("SELECT * from typeproduit WHERE statut=?");
                                    $rep->execute([0]);
                                    while ($tab=$rep->fetch()) {                                    
                                    ?>
                                        <option value="<?php echo $tab['id']; ?>">
                                            <?php echo  $tab['description']; ?>
                                        </option>
                                <?php 

                                    }

                                    ?>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Description <span class="text-danger">*</span></label>
                            <input autocomplete="off" required type="text" class="form-control" placeholder="Ex: QUARTZ" name="nom"
                                <?php if (isset($_GET['idpro'])) { ?> value="<?php echo $tab['description']; ?> <?php }?>">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-6 mt-4 col-sm-6 p-3">
                        <input type="submit" class="btn btn-dark w-100" name="valider" value="<?=$btn?>">
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
                            <th>Produit description</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $n=0;
                                while($idpro=$getData->fetch()){
                                $n++;
                                ?>
                        <tr>
                            <th scope="row"><?= $n;?></th>

                            <td> <?= $idpro[1] ?><?= $idpro[0] ?></td>                            

                            <td>
                                <a href='produits.php?idpro=<?=$idpro['id'] ?>' class="btn btn-dark btn-sm "><i
                                        class="bi bi-pencil-square"></i></a>
                                <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')"
                                    href='../models/delete/del-produit-post.php?idSupcat=<?=$idpro['id'] ?>' class="btn btn-danger btn-sm "><i
                                        class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </main><!-- End #main -->
    <?php require_once('script.php') ?>

</body>

</html>
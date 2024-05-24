<?php 
    include '../connexion/connexion.php';
    #Appel de la page qui fait les affichages
    require_once('../models/select/select-client.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Clients</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <?php require_once('style.php');?>
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
            <?php                
                if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                    ?><div class="alert-info alert text-center"><?=$_SESSION['msg']?></div><?php
                }
                #Cette ligne permet de vider la valeur qui se trouve dans la session message
                unset($_SESSION['msg']);                
            ?>
            <!-- Le form qui enregistrer les données  -->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <form class="shadow p-3" action="<?=$url?>" method="POST">
                    <div class="row">
                        <div class="col-12 p-3">
                            <label for="">Nom <span class="text-danger">*</span></label>
                            <input autocomplete="off" required type="text" class="form-control" placeholder="Entrez le Nom"
                                name="Nom" <?php if (isset($_GET['idclient'])) { ?>
                                value="<?php echo $tab['nom']; ?> <?php }?>">
                        </div>
                        <div class="col-12 p-3">
                            <label for="">Telephone <span class="text-danger">*</span></label>
                            <input autocomplete="off" required type="text" class="form-control" placeholder="Numero de telephone"
                                name="telephone" <?php if (isset($_GET['idclient'])) { ?>
                                value="<?php echo $tab['telephone']; ?> <?php }?>">
                        </div>
                        <div class="col-12 p-3">
                            <input type="submit" class="btn btn-dark w-100" name="<?=$btn?>" value="<?=$btn?>">
                        </div>
                    </div>
                </form>
            </div>
            <!-- La table qui affiche les données  -->
            <div class="col-xl-8 col-lg-8 col-md-6 table-responsive px-3">
                <table class="table table-sm text-center shadow">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>telephone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=0;                            
                            while($Client=$getData->fetch()){
                                $n++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $n;?></th>
                                        <td> <?= $Client["nom"] ?></td>
                                        <td> <?= $Client["telephone"] ?></td>
                                        <td>
                                            <a href='client.php?idclient=<?=$Client['id'] ?>' class="btn btn-dark btn-sm "><i
                                                        class="bi bi-pencil-square"></i></a>
                                            <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')"
                                                    href='../models/delete/deletecat.php?idSupcat=<?=$Client['id'] ?>' class="btn btn-danger btn-sm "><i
                                                        class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Le form qui enregistrer les données  
            <div class="col-xl-12 ">
                <form action="" class="shadow p-3">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Nom <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" placeholder="Entrez le nom">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Postnom <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" placeholder="Entrez le postnom">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Prenom <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" placeholder="Entrez le prenom">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Genre <span class="text-danger">*</span></label>
                            <select required name="" id="" class="form-select">
                                <option value="">Masculin</option>
                                <option value="">Feminin</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Adresse <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" placeholder="Entrez l'adresse">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Telephone <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" placeholder="Entrez le N° Tel">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                            <input type="submit" class="btn btn-dark w-100" value="Enregistrer">
                        </div>
                    </div>
                </form>
            </div>-->
            <!-- La table qui affiche les données  
            <div class="col-xl-12 table-responsive px-3 mt-3">
                <table class="table table-sm text-center shadow">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>prenom</th>
                            <th>Genre</th>
                            <th>Adresse</th>
                            <th>Tel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <th>1</th>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>Description</td>
                        <td>
                            <a href="" class="btn btn-dark btn-sm "><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-danger btn-sm "><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tbody>
                </table>
            </div>-->
        </div>
    </main><!-- End #main -->
    <?php require_once('script.php') ?>

</body>

</html>
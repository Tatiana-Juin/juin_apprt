<?php 
    $title = "Consulter toutes les annonces";
    require_once("inc/functions.inc.php");
    require_once("inc/header.inc.php");
    //APPELLE DE LA FONCTIONS 
    $annonces = allAnnonces();
?>

<main>
    <div class="mt-5 w-75 m-auto ">
        <h1 class="text-center mb-5">Toutes les annonces</h1>
        
        <!-- TABLEAU  POUR AFFICHER LES 15 PREMIERE ANNONCES-->
        <table class="table">
            <!-- en tête -->
            <thead>
                <tr> 
                    <th scope="col">Nom </th>
                    <th scope="col">Image </th>
                    <th scope="col">Description</th>
                    <th scope="col">code postal</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Type</th>
                    <th scope="col">prix</th>
                    <th scope="col">Consulter l'annonce</th>
                    
                </tr>
            </thead>

            <!-- contenu -->
            <tbody>
                <!-- BOUCLE POUR AFFICHER LES  ANNONCES -->
                <?php foreach($annonces as $key => $annonce){ ?>
                    <tr>
                        
                        <td> <?= strtoupper($annonce['title'])  ?> </td>
                        <td><img src="<?= $annonce['image'] ?>" alt="" class="img-fluid" ></td>
                        <td> <?= html_entity_decode(substr( $annonce['description'],0,45))  ?></td>
                        <td> <?= $annonce['postal_code'] ?> </td>
                        <td> <?= $annonce['city'] ?> </td>
                        <td> <?= $annonce['type'] ?> </td>
                        <td> <?= $annonce['price']."€" ?> </td>
                        
                        <!-- LIEN POUR ALLER VERS LA PAGE consulterAnnonce.php . ON UTILISE $_GET POUR RECUPERER LES INFO PAR RAPPORT A L'ID -->
                        <td> <a href="<?=RACINE_SITE?>consulterAnnonce.php?id_advert=<?=$annonce['id_advert']?>"> Consulter l'annonce </a> </td>
                        
                    </tr>
                <?php } ?>
                    
            </tbody>
        </table>
    </div>
</main>
<?php
    require_once("inc/footer.inc.php");
?>  
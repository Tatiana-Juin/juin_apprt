<?php 
    $title = "Accueil";
    //inclusion des fichier functions.inc.php et headerheader.inc.php
    require_once("inc/functions.inc.php");
    require_once("inc/header.inc.php");

    //APPELLE DE LA FONCTION DANS LA VARIABLE $annonces
    $annonces = annonceByAjout();
?>

<main>
    <!-- POUR AFFICHER LES 15 PREMIERE ANNONCES -->
    <div class="mt-5 w-75 m-auto ">
        <!-- titre de la page -->
        <h1 class="text-center mb-5">Les 15 premières annonces</h1>
        
        <!-- TABLEAU  POUR AFFICHER LES 15 PREMIERE ANNONCES-->
        <table class="table">
            <!-- en tête -->
            <thead>
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Nom </th>
                    <th scope="col">Image </th>
                    <th scope="col">Description</th>
                    <th scope="col">code postal</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Type</th>
                    <th scope="col">prix</th>
                    
                </tr>
            </thead>

            <!-- contenu -->
            <tbody>
                <!-- BOUCLE POUR AFFICHER LES 15 PREMIERES ANNONCES -->
                <?php foreach($annonces as $key => $annonce){ ?>
                    <tr>
                        <td> <?= $annonce['id_advert'] ?> </td>
                        <td> <?= strtoupper($annonce['title'])  ?> </td>
                        <td><img src="<?= $annonce['image'] ?>" alt="" class="img-fluid" ></td>
                        <td> <?= html_entity_decode(substr( $annonce['description'],0,55))  ?></td>
                        <td> <?= $annonce['postal_code'] ?> </td>
                        <td> <?= $annonce['city'] ?> </td>
                        <td> <?= $annonce['type'] ?> </td>
                        <td> <?= $annonce['price']."€" ?> </td>          
                    </tr>
                <?php } ?>              
            </tbody>
        </table>
    </div>
</main>

<!-- footer et fichier script de bootstrap -->
<?php
    require_once("inc/footer.inc.php");
?>      
<?php 
    $title ="Consulter une annonce";
    //inclusion du fichier fonction
    require_once("inc/functions.inc.php");

    //VARIABLE POUR LES MESSAGES 
    $info ="";

    //VERIFICATION POUR LE GET - SI $_GET['id_advert'] existe et est défini
    if(isset($_GET['id_advert'])){

        //SI $_GET['id_advert'] n'es pas vide alors
        if(!empty($_GET['id_advert'])){
            //recupére la valeur de la superglobal $_GET ayant comme indice id_advert
           $id_advert = htmlentities($_GET['id_advert']);
           //appelle de la fonction
           $annonce = showAnnonce($id_advert);
           
        }
    }

    //SI $_POST N'EST PAS VIDE
    if(!empty($_POST)){
        $verif = true;
        //verifie que tous les champs sont rempli
        foreach($_POST as $key => $value){
            if(empty(trim($value))){
                $verif=false;
            }
        }

        //AFFICHE UN MESSAGE ERREUR SI UN CHAMPS EST VIDE => $verif = false
        if(!$verif ){
            $info = alert("Erreur veuillez saisir tous les champs",'danger');
            
        } else{ // TOUS LES CHAMPS SON REMPLI
            
            //RECUPERE LA VALEUR 
            $reservation_message = trim($_POST['reservation_message']);

            //VERIFICATION POUR LE MESSAGE DE VERIFICATION
            if(strlen($reservation_message) < 10){
                $info = alert("Erreur veuillez saisir une description de plus de 10 caractere ","danger");
            }

            //SI $info EST VIDE - DONC IL N'Y A PAS D'ERREUR 
            if(empty($info)){
                //securise les informations
                $reservation_message = htmlentities($reservation_message); 
                //recupere l'id de maniére sécuriser
                $id_advert = htmlentities($_GET['id_advert']);
                //appelle et execution de la fonction
                updateAnnonce($reservation_message,$id_advert);
                //redirection 
                header("location:".RACINE_SITE."toutesAnnonces.php");
            }
        }
    }
    /*  le fichier header.inc.php est inclu a la fin car il a une redirection est on veut eviter les message erreur */
    require_once("inc/header.inc.php");
?>

<main>
    <!-- INFROMATION SUR L'ANNONCE -->
    <div class="mt-5 w-75 m-auto ">
        <!-- titre page -->
        <h1 class="text-center mb-5">Information sur l'annonce</h1>
        
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
                    <!-- POUR AFFICHER L'ENTETE DU TABLEAU SI C'EST RESERVER -->
                    <?php if(!empty($annonce['reservation_message'])){ ?> 
                        <th scope="col">Reservation</th>
                    <?php  }   ?>
                    
                </tr>
            </thead>
            <!-- contenu -->
            <tbody>
                <!--  POUR AFFICHER LES INFORMATION DE L'ANNONCE -->              
                    <tr>                   
                        <td> <?= strtoupper($annonce['title'])  ?> </td>
                        <td><img src="<?= $annonce['image'] ?>" alt="" class="img-fluid" ></td>
                        <td> <?= html_entity_decode($annonce['description'])  ?></td>
                        <td> <?= $annonce['postal_code'] ?> </td>
                        <td> <?= $annonce['city'] ?> </td>
                        <td> <?= $annonce['type'] ?> </td>
                        <td> <?= $annonce['price']."€" ?> </td> 

                       <!-- AFFICHE LE CONTENU SI reservation_message N'EST PAS VIDE -->
                        <?php 
                            if(!empty($annonce['reservation_message'])){ ?>
                                 <td> <?= html_entity_decode($annonce['reservation_message']) ?> </td> 
                          <?php  }   ?> <!-- fin du si -->
                    </tr>               
            </tbody>
        </table>                        
    </div>

    <!-- SI $annonce['reservation_message'] EST VIDE AFFICHE LE FORMULAIRE -->
    <?php if(empty($annonce['reservation_message'])){ ?>

        <!-- FORMULAIRE -->
        <div class="mt-3  w-50 m-auto "> 

            <h2 class="mt-2 text-center">Formulaire de reservation</h2>      
            <!-- pour les message -->
            <?= $info ?>

            <!-- FORMULAIRE POUR L'AJOUT DES ANNONCES -->
            <form action="" method="POST" >
                <!-- reservation_message -->
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-12">
                        <label for="reservation_message" class="form-label">Message de reservation </label>
                        <textarea class="form-control" id="reservation_message" rows="5" name="reservation_message" ></textarea>
                    </div>
                </div>

                <!-- Bouton pour reserver -->
                <div class="row mb-3">
                    <div class="col">
                    <button class="btn btn-primary" type="submit">Je reserve</button>
                    </div>
                </div>
            </form>
        </div>
   <?php } ?> <!-- fin du si  -->
                              
</main>

<!-- PIED DE PAGE  -->
<?php
    require_once("inc/footer.inc.php");
?>
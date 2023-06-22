<?php 
    $title = "Ajouer une annonce";
    require_once("inc/functions.inc.php");
    
    //INITIALISATION DE LA VARIABLE $info POUR LES MESSAGE
    $info ="";
    //APPELLE DE LA FONCTION allType() POUR RECUPERER TOUS LES TYPES DANS LA VARIABLE $types
    $types = allType();

    //VERIFICATION DE LA SAISIE DES CHAMPS 

    //SI LA SUPERGLOBAL $_POST N'EST PAS VIDE 
    if(!empty($_POST)){
        $verif = true;
        //verifie que tous les champs sont rempli
        foreach($_POST as $key => $value){
            if(empty(trim($value))){
                $verif=false;
            }
        }

         if(!$verif ){
            $info .= alert("Erreur veuillez saisir tous les champs",'danger');
            
        }else{
            
            //RECUPERATION DES DONNES SAISIE PAR L'UTILISATEUR
            $image = trim($_POST['image']);
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $postal_code = trim($_POST['postal_code']);
            $city = trim($_POST['city']);
            $type = trim($_POST['type']);
            $price = trim($_POST['price']);

            //VERIFICATION POUR LE image
            if(strlen($image) < 20 || !preg_match('#(https?|ftp|ssh|mailto):\/\/[a-z0-9\/:%_+.,\#?!@&=-]+#i',  $image)){
                $info.= alert("Erreur votre lien est incorrecte ","danger");
            }

            //VERIFICATION POUR LE title
            if(strlen($title) < 5){
                $info.= alert("Erreur veuillez saisir un titre de plus de 5 caractere ","danger");
            }

            //VERIFICATION POUR LA description
            if(strlen($description) < 10){
                $info.= alert("Erreur veuillez saisir une description de plus de 10 caractere ","danger");
            }

            //VERIFICATION code postal
            if(strlen($postal_code) < 5){
                $info.= alert("Erreur veuillez saisir un code postal de 5 chiffre","danger");
            }

            //VERIFICATION code postal - l'utilisateur ne peut pas saisir dde chiifre 
            if(strlen($city) < 2 || preg_match('/[0-9]+/',$city)){
                $info.= alert("Erreur veuillez saisir au moins 2 caracteres alphabetiques pour la ville","danger");
            }

            //VERIFICATION POUR LE PRIX 
             //VERIFICATION code postal - l'utilisateur ne peut pas saisir dde chiifre 
             if(strlen($price) < 3 ){
                $info.= alert("Erreur veuillez saisir un nombre de 3 chiffres minimum pour le prix","danger");
            }

            //IL N'Y A AUCUNE ERREUR - $info est vide 
            if(empty($info)){
                //pour la securisation
                $image = htmlentities($image);
                $title = trim($title);
                $description = htmlentities($description);
                $postal_code = htmlentities($postal_code);
                $city = htmlentities($city);
                $type = htmlentities($type);
                $price = htmlentities($price);

                //APPELLE ET EXECUTION DE LA FONCTION 
                addAnnonce($image,$title,$description,$postal_code,$city,$type,$price);
                //REDIRECTION SI CA FONCTIONNE 
                header("location:".RACINE_SITE."index.php");
            }
            
        }

    }
    require_once("inc/header.inc.php");
?>

<main>
    <!-- AJOUT ANNONCE -->
   <div class="mt-3  w-50 m-auto ">
        <!-- TITRE DE LA PAGE -->
        <h1 class="text-center mb-3">Ajouter une annonce</h1>
        <?php
            
            echo $info;
        ?>
        <!-- FORMULAIRE POUR L'AJOUT DES ANNONCES -->
        <form action="" method="post" enctype="multipart/form-data">

           <!-- photo --> 
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12">
                    <label for="image" class="mb-3">Image</label>
                    <input type="text" id="image" name="image" class="form-control" >
                </div>
            </div>
            <!-- Nom -->
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12">
                    <label for="title" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>
            </div>
            
            <!-- description -->
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="5" name="description" ></textarea>
                </div>
            </div>

            <!-- code postal -->
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 ">
                    <label for="postal_code" class="form-label">code postal</label>
                    <input type="number" class="form-control" id="postal_code" name="postal_code" >
                </div>
            </div>

            <!-- ville -->
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 ">
                    <label for="city" class="form-label">ville</label>
                    <input type="text" class="form-control" id="city" name="city" >
                </div>
            </div>

            <!-- type -->
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 ">
                    <label for="city" class="form-label">Type d'annonce</label>
                    <select name="type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <!-- Boucle pour afficher tous les types -->
                        <?php foreach($types as $key => $type){ ?>
                                            <option  name=""><?= $type['type'] ?></option>
                        <?php } ?>
                    </select>  
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 ">
                    <label for="price" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" >
                </div>
            </div>
            

            <!-- Bouton validation -->
            <div class="row mb-3">
                <div class="col">
                <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </div>

        </form>
   </div>
</main>

<?php
    require_once("inc/footer.inc.php");
?>  
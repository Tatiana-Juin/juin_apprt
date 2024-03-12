<?php
    //CONSTANTE POUR LE CHEMIN ABSOLU 
    define("RACINE_SITE","/juin_apprt/");

    //FONCTION DEBUG 
    function debug($variable){
        echo '<pre >';
        var_dump($variable);
        echo "</pre>";
    }

     //FONCTION POUR AFFICHER LES MESSAGES
     function alert( string $text, string $classColor) :string {
        return "<div class=\"alert alert-$classColor  text-center w-50 m-auto alert-dismissible \" role=\"alert\">
            $text
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>";
    }

    //POUR LA CONNEXION A LA BDD
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","php_intermediaire_tatiana");

    //FONCTION CONNEXION A LA BDD 
    function connexionBdd(){
        $dsn = "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8";
        try {
            $pdo = new PDO($dsn,DBUSER,DBPASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $pdo;
    }

    //FONCTION POUR AFFICHER LES 15 DERNIERE ANNONCE 
    function annonceByAjout() :array{
        $pdo = connexionBdd();
        $sql = "SELECT * FROM advert ORDER BY id_advert DESC LIMIT 15";
        $request = $pdo->query($sql);
        $result = $request->fetchAll();
        return $result; 
    }

    //FONCTION POUR AFFICHER TOUS LES TYPE
    function allType(){
        $pdo = connexionBdd();
        $sql = "SELECT DISTINCT type FROM advert ";
        $request = $pdo->query($sql);
        $result = $request->fetchAll();
        return $result; 
    }

    //FONCTION POUR AJOUTER UNE ANNONCE
    function addAnnonce(string $image, string $title,string $description, int $postal_code, string $city, string $type,  float $price) :void{
        $pdo = connexionBdd();
        $sql = "INSERT INTO advert(image,title,description,postal_code,city,type,price) VALUES (:image,:title,:description,:postal_code,:city,:type,:price)";
        $request = $pdo->prepare($sql);
        $request->execute(array(
            ':image' => $image,
            ':title' => $title,
            ':description' =>$description,
            ':postal_code' => $postal_code,
            ':city' => $city,
            ':type' => $type,
            ':price' => $price
        ));
    }

    //FONCTION POUR AFFICHER TOUTES LES ANNONCES 
    function allAnnonces() :array{
        $pdo = connexionBdd();
        $sql = "SELECT * FROM advert ";
        $request = $pdo->query($sql);
        $result = $request->fetchAll();
        return $result; 
    }

    //FONCTION POUR AFFICHER UNE ANNONCE
    function showAnnonce(int $id) :array{
        $pdo = connexionBdd();
        $sql = "SELECT * FROM advert WHERE id_advert = :id";
        $request = $pdo->prepare($sql);
        $request->execute(array(
            ':id'=> $id
        ));
        $result = $request->fetch();
        return $result;
    }

    //FONCTION POUR MODIFIER LE CHAMP reservation_message
    function updateAnnonce(string $reservation_message,int $id) :void{
        $pdo = connexionBdd();
        $sql = "UPDATE advert SET reservation_message = :message WHERE id_advert = :id";
        $request = $pdo->prepare($sql);
        $request->execute(array(
            ':message' => $reservation_message,
            ':id' => $id
        ));
    }
?>
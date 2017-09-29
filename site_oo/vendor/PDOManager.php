<?php

//site_oo/vendor/PDOManager.php_ini_loaded_file
//Cette classe est un singleton. Le singleton est un design pattern qui permet de 
//créer une classe qui ne sera instanciable qu'une seule fois.
//L'intérêt est d'avoir un seul objet qui récupère une seule connexion à la BDD

class PDOManager{
    private static $instance = NULL; //contiendra un objet de la classe PDOManager
    private $pdo; //Contiendra mon objet PDO (Connexion à la BDD)

    private function __construct(){} //se lance à la création de l'objet. Si rien dedans pas la peine de la déclarer. En gnl en public mais si on passe en private elle ne se lancera pas en dehors de la classe. 1ère étape du singleton
    private function __clone(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new PDOManager;
        }
        return self::$instance;
    }

    public function getPdo(){
        require __DIR__ . '/../app/parameters.php';
        //dir, renvoi le chemin absolue dans lequel on se trouve
        //require C:\xampp\htdocs\phpoo\site_oo\vendor

        $this -> pdo = new PDO('mysql:host=' . $parameters['host'] . ';dbname=' . $parameters['dbname'], $parameters['login'], $parameters['password']);
        return $this -> pdo;

    }

}
    //$pdomanager = new PDOManager; // Impossible d'instancier un objet avec le construct en private.
    //si on ne peut pas instancier on ne peut pas multiplier __clone en private aussi
    //static élément d'une classe 

    $pdomanager = PDOManager::getInstance();
    // $pdomanager2 = PDOManager::getInstance(); sert a rien d'avoir 12 objets, une seule connexioon à la bdd

    // $resultat = $pdomanager -> getPDO() -> query("SELECT * FROM produit");
    // $produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // print_r($produits);
    // echo '<pre>';
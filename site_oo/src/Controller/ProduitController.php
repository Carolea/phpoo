<?php
//site_oo/src/Controller/ProduitController.php

class ProduitController{
    //une fonction par action

    private $model;
    
    public function __construct(){
        $this -> model = new ProduitModel;
    }

    public function getModel(){
        return $this -> model;
    }

//Afficher tous les produits
    public function afficheAll(){
        //objectif 1 : récupérer les données dans la BDD:
        $produits = $this -> getModel() -> getAllProduits();
        $categories= $this -> getModel() -> getAllCategories();

        //objectif 2 : afficher la vue (boutique.php):
        require __DIR__ . '/../View/haut.inc.php';
        require __DIR__ . '/../View/Produit/boutique.php';
        require __DIR__ . '/../View/bas.inc.php';
    }

//Afficher les produits par catégorie
    public function afficheCategorie($categorie){

    }

//Afficher un produit
    public function affiche($id){

    }


}


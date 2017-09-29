<?php
//site_oo/web/index.php_ini_loaded_file
session_start();

require __DIR__ . '/../vendor/PDOManager.php';
require __DIR__ . '/../src/Model/ProduitModel.php';
require __DIR__ . '/../src/Controller/ProduitController.php';

$pm = new ProduitModel;

//test de ProduitModel
//$produits = $pm -> getAllProduits();
//$produits = $pm -> getAllProduitsByCategorie('pull');
//$categories = $pm -> getAllCategories();
//$produit = $pm -> getProduitById(3);

// echo '<pre>';
// print_r($pm -> getAllProduits());
// echo '<pre>';

//test de ProduitController

$pc = new ProduitController;
$pc -> afficheAll();

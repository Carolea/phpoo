<?php
//site_oo/src/Model/ProduitModel

class ProduitModel{

    private $db; //contient un objet PDO

    public function __construct(){ //devient le setter pour automatiser l'action
        $this -> db = PDOManager::getInstance() -> getPdo();
    }

    public function getDb(){
        return $this -> db;
    }

    //--------------------

    // select * from produit (recup tous les produits)
    public function getAllProduits(){

        $requete = "SELECT * FROM produit";
        $resultat = $this -> getDb() -> query($requete); 
        //objet à l'intérieur d'une classe, instance sans héritage -> ->

        $produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);

        if(!$produits){
            return false;
        } else{
            return $produits;
        }


    }

    // select DISTINCT categorie from produit (recup par produit)
    public function getAllCategories(){
        $requete = "SELECT DISTINCT categorie FROM produit";
        $resultat = $this -> getDb() -> query($requete);

        $categories = $resultat -> fetchAll(PDO::FETCH_ASSOC);

        if(!$categories){
            return false;
        } else {
            return $categories;
        }

    }

    // select * from produit where categorie = xxxx
    public function getAllProduitsByCategorie($categorie){
        $requete = "SELECT * FROM produit WHERE categorie = :categorie";

        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $resultat -> execute();

        $produits = $resultat -> fetchAll(PDO::FETCH-ASSOC);

        if(!produits){
            return false;
        } else {
            return $produits;
        }

    }

    // select * from produit where id_produit = xxxx
    public function getProduitById($id){
            $requete = "SELECT * FROM produit WHERE id_produit = :id_produit";

            $resultat = $this -> getDb() ->prepare($requete);
            $resultat -> bindParam(':id_produit', $id, PDO::PARAM_INT);
            $resultat -> execute();

            $produit = $resultat -> fetch(PDO::FETCH_ASSOC);

            if(!produit){
                return false;
            } else {
                return $produit;
            }


    }

}

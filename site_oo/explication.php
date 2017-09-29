<!-- 
        phpoo/
            site_oo/
                explications.txt
                vendor/
                web/
                src/
                app/

                ---------
        arborescence:
            vendor/ : coeur de l'application
            web/    : repertoire racine (index.php, img/, photo/, font/, js/, css/, etc...)
            src/    : code PHP, SQL, et HTML propre à notre application
            app/    : configuration de l'application

                --------
        Nature des fichiers:
            app/
                parameters.php : ce fichier contient les infos de connexion à la BDD.

            vendor/
                PDOManager.php
                //en charge de l'accès à la bdd (plutot symfony)
                //design pattern, comment créer un objet unique d'une classe.
                //Cette classe représente notre connexion à la bdd et nous retourne un objet PDO, grâce auquel nous pourrons faire des requêtes
                //Cette classe est un singleton, cela signifie qu'il ne peut y avoir qu'un seul objet.
                //fichier qu'on touche rarement sur silex

            src/
                Model/
                    ProduitModel.php
                        //ce fichier a pour objectif de récupérer une connexion à la bdd (grâce à PDOManager) et ensuite doit êtreen mesure d'effectuer toutes les requêtes concernant notre entité Produit. 
                        (Aucune requête SQL ne devrait exister ailleurs que dans un fichier Model)

                web/
                    index.php : clé d'entrée de notre application. C'est à partir de ce fichier que le site se déploie. C'est le seul fichier que notre navigateur va exécuter...

                src/
                    Controller/
                        ProduitController.php : cette classe permet de déclencher toutes les actions sur l'entité Produit (hors action liées à l'admin du site)
                        Le controller à 2 missions:
                            1- Récupérer un modele pour échanger avec la BDD
                            2- Afficher la bonne vue en fonction de l'action demandée

                src/
                    View/
                        haut.inc.php
                        bas.inc.php

                        Produit/
                            boutique.php
                            fiche_produit.php

                        Nos fichiers de vue contiennent presque exclusivement du code html/css. Leur objectif est d'afficher les vues !!
                        Le peu de php présent permet de dynamiser le code.


                web/
                    photo/
                    css/
                    js/
                    fonts/

                    On récupère les dossiers


------------------------------------------------------------------------------------------
    interface//


    abstraction//

    class Joueur
        public function seConnecter(){
            $this -> etreMajeur();
        }

        abstract public function etreMajeur(); //déclarée pas de corps donc de {}

        class JoueurFr extends Joueur{
            public etreMajeur(){
                return 18;
            }
        }

        class JoueurUs extends Joueur{
            public etreMajeur(){
                return 21;
            }
        }

//
        getter/setter seulement pour private
        $joueur = new Joueur
        echo $joueur -> getPseudo(); 
        élément de l'objet en cours d'utilisation, $this ici $joueur
//



    injection de dépendances/singleton à retenir


    ----------------------------------------------------
    En théorie les actions qu'on pourrait mettre
    
    //MembreController:
    inscription
    connexion
    profil
    deconnexion
    valider son adresse email
    inscription newsletter
    parrainage
    suppression de mon compte

    //ProduitController:
    afficher tous les produits
    afficher un produits
    afficher les produits par catégorie


    //CommandeController :
    ajouter un produit au panier
    supprimer un panier
    ajouter une unité
    retirer une unité
    retirer un produit
    choix du transport
    choix du paiement 
    code promo


//ajouter/supprimer/modifier produit plutot en dossier admin
//trier les produits si l'option existe
//pareil pour champ de recherche
//ajouter au panier plutot en commande/controller

-->
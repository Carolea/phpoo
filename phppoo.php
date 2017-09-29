<?php

/*







légèrement différent des fonctions auxquelles nous étions habitués.



******** exemple
 * <?php
 * 
 * 
 * $bdd = new PDO(mysql:host=localhost; dbname='test', 'root', '')
 * ?>
 * 
 * En fait $bdd n'est pas une variable mais un objet.
 * On crée un objet à l'aide de la commande new suivie de la classe.
 * 
 * 
 * ********************Classe et objet********************
 * La classe est un plan, une description de l'objet. L'objet est 
 * l'instance d'une classe. C'est une application concrète du plan donc
 * en reprenant le code ci-dessus:
 * $bdd est l'objet,
 * PDO est le nom de la classe sur laquelle est basée l'objet.
 * 
 * En conclusion un objet est un ensemble de méthode et de classe.
 * Lorsqu'on l'utilise on fait appel à ces méthodes(fonction).


***************Exemple de classe (un plan de construction)*************

Etant donné qu’une classe est le modèle de quelque chose que nous 
voudrions construire. Le plan de construction d'une maison 
qui réunit les instructions destinées à la construction est donc 
une classe.  Cependant le plan n'est pas une maison.  La maison est 
un objet qui a été « fabriqué » à partir de la classe (le plan).  
A partir du plan (la classe) nous pouvons construire une ou 
plusieurs maisons (l’objet)
  
 
* objet1 maison1 construit à partir du plan (instance de classe)
* objet2 maison2
* objet3 maison3 

<?phh
  $bdd->query();
  $bdd->prepare();
  $bdd->execute();
?>
 * 
 * Cela signifie: execute la fonction query de mon objet $bdd,
 * puis la fonction prepare, puis le fonction execute, etc...
 * 
 * 
 * La flèche -> est propre aux objets. Donc on execute la fonction 
 * query() de l'objet $bdd qui représente la connexion à la base
 * de donnée.
 * 
 * *****Autre exemple
 * 
 * <?php
 * $maison1 = new Maison();
 * $maison2 = new Maison();
 * $maison->nettoyer();
 * ?>
 * 
 * Ici nous avons plusieurs objets représentant des maisons 
 *($maison1 et $maison2), mais nous n'appelons que la fonction 
 * nettoyer de la maison1. C'est donc la maison1 qui sera propre.
 * 
 * 
 *************Créer une classe***********
 * Par exemple nous créons une classe membre qui représente 
 * un membre de notre site, nous pourrons charger ce membre à partir 
 * des informations enregistrée en bdd, lui demander son pseudo, date
 * d'inscription, mais aussi le bannir, le déconnecter du site, etc...
 * 
 * Le code d'une classe est en gnl assez long, il est recommandé de créer 
 * un fichier php qui contiendra uniquement la définition de la classe et 
 * qu'on inclu dès que besoin.
 * 
 * Il est recommandé de créer un fichier avec l'extension 
 * Membre.classe.php (.classe.php pour bien les différencier)
 * Donnez au fichier le même nom que la classe. Le nom de la classe
 * doit commencer par une majuscule
 * 
 * *********Exemple: le fichier Membre.classe.php
 * <?php
 *     class Membre
 *     {
 *     

 *     }
 * ?>
 * 
 * /!\Etant donné que notre fichier ne contiendra que du code PHP,
 * il est possible de retirer la balise de fermeture ?> à la fin 
 * du fichier. Cela peut paraitre surprenant mais c'est en fait un moyen
 * efficace d'éviter d'insérer des lignes blanches à la fin du code php, 
 * ce qui à tendance à produire des bug du type "header already sent by"?
 * 
 * A l'intérieur des accolades nous allons définir les variables  
 * (appelé aussi propriétés ou attributs) et les fonctions (appelées 
 * aussi méthodes).
 * 
 * ****Définir les variables et les fonctions dans la classe Membre****
 * 
 * - le pseudonyme
 * - une adresse e-mail
 * - un statut (actif ou non)
 * 
 * *****déclaration des variables
 * <?php
 * 
 *  class Membre
 * {
 *      private $pseudo;
 *      private $email;
 *      private $actif;
 * 
 * }
 * 
 * ?>
 * 
 * /!\ Private signifie personne (à part la classe) n'a le droit
 * d'accèder à l'élément.
 * 
 * 
 * ************L'héritage**************
 * 
 * L'héritage permet de réutiliser des classes pour en construire 
 * de nouvelle.
 * 
 * Exemple: on peut dire qu'un administrateur est un membre donc 
 * on peut faire un héritage. Donc la classe administrateur 
 * va hériter de la classe membre.
 * 
 * 
 * ******Réaliser un héritage en PHP******
 * Nous allons créer une nouvelle classe Administrateur qui sera basée 
 * sur la classe Membre. Elle aura toutes les variables (ou attributs, 
 * ou propriétés) et les fonctions de la classe Membre, mais elle aura 
 * en plus de nouvelles variables et fonctions.
 * 
 * Créer le fichier admin.class.php
 * 
 * <?php
 *  require_once('membre.class.php')
 * 
 * class Admin extends Membre
 * 
 * ?>
 * 
 * 
 * /!\ extend signifie "étend" *ndlr woooow*
 * Donc la class Admin étend les possibilité de la classe Membre.
 * C'est ce qu'on appelle l'héritage. Il faut inclure le fichier
 * 'membre.classe.php' pour permettre l'héritage.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
*/






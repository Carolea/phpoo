<?php

class User
{
   private $firstName; 
   private $lastName;
   private $age;
   /*
    * Construction de la classe
    * si cette classe existe, est appelée à l'instanciation (création de l'objet) 
  */
   
   public function __construct($firstName = NULL)
   { 
       $this->setFirstName($firstName);
   }
   
   /*
       //fonction setFirstName appelle l'objet $firstName
       * Getter de l'attribut firstName ne fait que retourner la valeur 
       * de l'attribut
       * getter afficher/setter modifier
   */
   
   public function getFirstName() 
   {
        return $this->firstName;
   }
   
   /*
        * Le setter de l'attribut firstName permet de modifier 
        * la valeur de l'attribut
    */
   
   public function setFirstName($value) 
   {
       $this->firstName = $value;
       return $this;
   
   }
   
   public function getLastName() 
   {
        return $this->lastName;
   }
   
   /*
        * Le setter de l'attribut firstName permet de modifier 
        * la valeur de l'attribut
    */
   
   public function setLastName($value) 
   {
       $this->lastName = $value;
       return $this;
   
   }
   
   
   public function getAge() 
   {
       return $this->age;
       
   }
   
   public function setAge($age) 
   {
       $this->age = $age;
       
       return $this;
   }
   
   /*
        * Méthode "magique" qui est appelée 
        * automatiquement quand on demande l'objet sous 
        * forme de chaine de caractères (avec un echo par ex)
   */
   
   public function __toString()
   {
       return $this->firstName
               . '' . $this->lastName;   
   }
           
}


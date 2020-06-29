<?php
class etud_non_boursier extends etudiant{
   private $adresse;
  
   public function __construct($row=null){
       if($row!=null){
           $this->hydrate($row);
       }

   }
   //joue le role de l'initialisation
   public  function hydrate($row){
        $this->INE=$row['INE']; 
        $this->name=$row['name']; 
        $this->firstname=$row['firstname']; 
        $this->mail=$row['mail'];
        $this->tel=$row['tel']; 
        $this->adresse=$row['adresse']; 
   }
   public function getadresse(){
       return $this->adresse;
   }

   public function setadresse($adresse){
       $this->adresse=$adresse;
   }


   
}
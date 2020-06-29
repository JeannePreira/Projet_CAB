<?php
class etud_boursier_non_loge extends etudiant{
   private $pension;


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
        $this->pension=$row['pension']; 
   }
   public function getpension(){
       return $this->pension;
   }

   public function setpension($pension){
       $this->pension=$pension;
   }

   public function setProfil($profil){
        
}



   
}
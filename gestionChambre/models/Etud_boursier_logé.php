<?php
class etudiant_boursier_loge extends etudiant{
   private $pension;
   private $numchambre;
   //Propriete de Navigation
   //manyTomany
    private $collectionchambre=[];

   public function __construct($row=null){
       if($row!=null){
           $this->hydrate($row);
       }

   }
   //Redefinition
   public  function hydrate($row){
        $this->INE=$row['INE']; 
        $this->name=$row['name']; 
        $this->firstname=$row['firstname']; 
        $this->mail=$row['mail'];
        $this->tel=$row['tel'];  
        $this->pension=$row['pension']; 
        $this->numcham=$row['numcham'];
   }
   public function getpension(){
       return $this->pension;
   }
    public function getnumcham(){
    return $this->numcham;
    }

   public function setpension($pension){
       $this->pension=$pension;
   }

    public function setnumcham($numcham){
    $this->numcham=$numcham;
    }

  



   
}
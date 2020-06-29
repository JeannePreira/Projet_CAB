<?php
class etudiant implements IGestion//la class etudiant doit avoir la methode abstrite 
{
        //Attributs
       //Encapsulation
        protected  $INE;
        protected  $name;
        protected  $firstname;
        protected  $mail;
        protected  $tel;
        
        // public abstract  function hydrate($row); =>se transforme en class abstraite
  //oubien devient  class concrete en redéfinnisant la methode abstraite
    public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

    }
    //joue le role de l'initialisation,redefinition
     public  function hydrate($row){
        $this->INE=$row['INE']; 
        $this->name=$row['name']; 
        $this->firstname=$row['firstname']; 
        $this->mail=$row['mail'];
        $this->tel=$row['tel'];  
     }
      //Methodes
        //Getters
        public function getINE(){
            return $this->INE;
        }
        public function getname(){
            return $this->name;
        }

        public function getfirstname(){
            return $this->firstname;
        }

        public function getmail(){
            return $this->mail;
        }

        public function gettel(){
            return $this->tel;
        }

        //Setters
    
        public function setINE($INE){
             $this->INE=$INE;
        }
        public function setname($name){
             $this->name=$name;
        }

        public function setfirstname($firstname){
            $this->firstname=$firstname;
        }

        public function setmail($mail){
             $this->mail=$mail;
        }

        public function settel($tel){
            $this->tel=$tel;
        }

}
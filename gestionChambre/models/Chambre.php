<?php
class Chambre implements IGestion{
    private $numcham;
    private $numdep;
    private $typecham;
    
   //manyTomany
   private $collectionetudiant=[];


    public function  __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }
   //Redefinir la methode hydrate
   public function hydrate($row){
       $this->numcham=$row['numcham'];
       $this->numdep=$row['numdep'];
       $this->typecham=$row['typecham'];
   }
   
   public function getNumCham(){
            return $this->numcham;
        }
        public function getNumdep(){
            return $this->numdep;
        }

        public function getTypeCham(){
            return $this->typecham;
        }

        //Setters
    
        public function setNumCham($numcham){
             $this->numcham=$numcham;
        }
        public function setNumDep($numdep){
             $this->numdep=$numdep;
        }

        public function setTypeCham($typecham){
            $this->typecham=$typecham;
        }

      
}
<?php
class UserController extends Controller{

    public  function __construct(){
        $this->folder="layout";
        $this->layout="default";
        $this->validator=new Validator();
      
     }
    
    //use case

    public function enregistrerEtudiant(){
        $this->view="enregistrerEtudiant";
         $this->render();
    }

    public function enregistrerChambre(){
        $this->view="enregistrerChambre";
        $this->render();
    }
    public function listerchambre(){
       
        $this->view="listechambre";
        $this->dao=new chambreDao();
        $chambre=$this->dao->getChambre();
        $this->data_view["chambre"]=$chambre;
        $this->render();
    }

    public function supprimerchambre(){
        
    }

    public function modifierchambre(){
        
    }

    public function listerEtudiant(){
        $this->view="listeEtudiant";
        $this->render();

    }

    public function supprimeretudiant(){
        
    }

    public function modifieretudiant(){
        
    }

    

}
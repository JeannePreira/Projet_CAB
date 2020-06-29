<?php
class etudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiant";
        $this->className="etudiant";
    }

    public function add($INE,$name,$firsname,$mail,$tel,$pension,$type_etudiant){
        $sql=$pdo->prepare("INSERT INTO etudiant (INE,name,firstname,mail,tel,pension,pension,type_etudiant) VALUES (?,?,?,?,?,?,?,?)");
      $sql->execute(array($INE,$name,$firsname,$mail,$tel,$pension,$type_etudiant));
       // return $this->executeUpdate($sql,$obj);
       }

   
    public function update($obj){

    }
    
   
   





}
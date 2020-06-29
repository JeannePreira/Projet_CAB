<?php

class chambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="chambre";
    }

   
    public function add($obj){
        $sql="";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    
    public function getchambre(){
        return $this->findAll();
    }





}
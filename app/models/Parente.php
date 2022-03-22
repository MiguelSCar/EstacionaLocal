<?php

namespace app\models;
use app\core\Model;

class Parente extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM parentes";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($parente){
        //$nome = $_POST["nome"];
        //INSERT INTO parente (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO parentes SET
            nome        =:nome,
            parentesco  =:parentesco,
            dtnasc      =:dtnasc,
            celular     =:celular,
            email       =:email
            
            
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":nome", $parente->nome);
        $qry->bindValue(":parentesco", $parente->parentesco);
        $qry->bindValue(":dtnasc", $parente->dtnasc);
        $qry->bindValue(":celular", $parente->celular);
        $qry->bindValue(":email", $parente->email);
        
        

        $qry->execute();

        return $this->db->lastInsertId();


    }
}
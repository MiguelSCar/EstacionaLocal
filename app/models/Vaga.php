<?php
namespace app\models;
use app\core\Model;

class Vaga extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblvagas";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada nome de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($vaga){
        $sql = " INSERT INTO tblvagas set
        estado =:estado,
        preferencial =:preferencial
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":estado", $vaga->estado);
        $qry->bindValue(":preferencial", $vaga->preferencial);
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getVaga($id){
        $sql = "SELECT * FROM tblvagas where idvaga = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($vaga){
        $sql = " UPDATE tblvagas set
        estado =:estado,
        preferencial=:preferencial
        where idvaga =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":estado", $vaga->estado);
        $qry->bindValue(":preferencial", $vaga->preferencial);
        
        $qry->bindValue(":id", $vaga->idvaga);
        $qry->execute();

        return $vaga->idvaga;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblvagas where idvaga = $id";
        $qry = $this->db->query($sql);
    }


    

}
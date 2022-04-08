<?php
namespace app\models;
use app\core\Model;

class Aviso extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblaviso";

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

    public function inserir($aviso){
        $sql = " INSERT INTO tblaviso set
        titulo =:titulo,
        texto =:texto,
        remetente=:remetente,
        data=:data
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":titulo", $aviso->titulo);
        $qry->bindValue(":texto", $aviso->texto);
        $qry->bindValue(":remetente", $aviso->remetente);
        $qry->bindValue(":data", $aviso->data);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getAviso($id){
        $sql = "SELECT * FROM tblaviso where idaviso = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($aviso){
        $sql = " UPDATE tblaviso set
        titulo =:titulo,
        texto =:texto,
        remetente=:remetente,
        data=:data
        where idaviso =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":titulo", $aviso->titulo);
        $qry->bindValue(":texto", $aviso->texto);
        $qry->bindValue(":remetente", $aviso->remetente);
        $qry->bindValue(":data", $aviso->data);
        $qry->bindValue(":id", $aviso->idaviso);
        $qry->execute();

        return $aviso->idaviso;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblaviso where idaviso = $id";
        $qry = $this->db->query($sql);
    }


    

}
<?php
namespace app\models;
use app\core\Model;

class Carro extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblcarros";

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

    public function inserir($carro){
        $sql = " INSERT INTO tblcarros set
        nome =:nome,
        marca =:marca,
        cor=:cor,
        cliente=:cliente,
        email=:email,
        celular=:celular
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $carro->nome);
        $qry->bindValue(":marca", $carro->marca);
        $qry->bindValue(":cor", $carro->cor);
        $qry->bindValue(":cliente", $carro->cliente);
        $qry->bindValue(":email", $carro->email);
        $qry->bindValue(":celular", $carro->celular);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getCarro($id){
        $sql = "SELECT * FROM tblcarros where idcarro = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($carro){
        $sql = " UPDATE tblcarros set
        nome =:nome,
        marca =:marca,
        cor=:cor,
        cliente=:cliente,
        email=:email,
        celular=:celular
        where idcarro =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $carro->nome);
        $qry->bindValue(":marca", $carro->marca);
        $qry->bindValue(":cor", $carro->cor);
        $qry->bindValue(":cliente", $carro->cliente);
        $qry->bindValue(":email", $carro->email);
        $qry->bindValue(":celular", $carro->celular);
        $qry->bindValue(":id", $carro->idcarro);
        $qry->execute();

        return $carro->idcarro;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblcarros where idcarro = $id";
        $qry = $this->db->query($sql);
    }


    

}
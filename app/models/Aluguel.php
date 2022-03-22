<?php
namespace app\models;
use app\core\Model;

class Aluguel extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblaluguel";

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

    public function inserir($aluguel){
        $sql = " INSERT INTO tblaluguel set
        carro =:carro,
        vaga =:vaga,
        tempo=:tempo
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":carro", $aluguel->carro);
        $qry->bindValue(":vaga", $aluguel->vaga);
        $qry->bindValue(":tempo", $aluguel->tempo);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getAluguel($id){
        $sql = "SELECT * FROM tblaluguel where idaluguel = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($aluguel){
        $sql = " UPDATE tblaluguel set
        carro =:carro,
        vaga =:vaga,
        tempo=:tempo
        where idaluguel =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":carro", $aluguel->carro);
        $qry->bindValue(":vaga", $aluguel->vaga);
        $qry->bindValue(":tempo", $aluguel->tempo);
        $qry->bindValue(":id", $aluguel->idaluguel);
        $qry->execute();

        return $aluguel->idaluguel;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblaluguel where idaluguel = $id";
        $qry = $this->db->query($sql);
    }


    

}
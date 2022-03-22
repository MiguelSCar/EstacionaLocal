<?php
namespace app\models;
use app\core\Model;

class Contato extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM contato";

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

    public function inserir($contato){
        $sql = " INSERT INTO contato set
        nome =:nome,
        cep =:cep,
        endereco=:endereco,
        complemento=:complemento,
        numero=:numero,
        bairro=:bairro,
        cidade=:cidade,
        estado=:estado,
        celular=:celular,
        email=:email,
        dtnasc=:dtnasc,
        cpf=:cpf
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $contato->nome);
        $qry->bindValue(":cep", $contato->cep);
        $qry->bindValue(":endereco", $contato->endereco);
        $qry->bindValue(":complemento", $contato->complemento);
        $qry->bindValue(":numero", $contato->numero);
        $qry->bindValue(":bairro", $contato->bairro);
        $qry->bindValue(":cidade", $contato->cidade);
        $qry->bindValue(":estado", $contato->estado);
        $qry->bindValue(":celular", $contato->celular);
        $qry->bindValue(":email", $contato->email);
        $qry->bindValue(":dtnasc", $contato->dtnasc);
        $qry->bindValue(":cpf", $contato->cpf);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getContato($id){
        $sql = "SELECT * FROM contato where idcontato = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($contato){
        $sql = " UPDATE contato set
        nome =:nome,
        cep =:cep,
        endereco=:endereco,
        complemento=:complemento,
        numero=:numero,
        bairro=:bairro,
        cidade=:cidade,
        estado=:estado,
        celular=:celular,
        email=:email,
        dtnasc=:dtnasc,
        cpf=:cpf
        where idcontato =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $contato->nome);
        $qry->bindValue(":cep", $contato->cep);
        $qry->bindValue(":endereco", $contato->endereco);
        $qry->bindValue(":complemento", $contato->complemento);
        $qry->bindValue(":numero", $contato->numero);
        $qry->bindValue(":bairro", $contato->bairro);
        $qry->bindValue(":cidade", $contato->cidade);
        $qry->bindValue(":estado", $contato->estado);
        $qry->bindValue(":celular", $contato->celular);
        $qry->bindValue(":email", $contato->email);
        $qry->bindValue(":dtnasc", $contato->dtnasc);
        $qry->bindValue(":cpf", $contato->cpf);
        $qry->bindValue(":id", $contato->idcontato);
        $qry->execute();

        return $contato->idcontato;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM contato where idcontato = $id";
        $qry = $this->db->query($sql);
    }


    

}
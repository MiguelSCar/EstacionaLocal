<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Carro;

class CarroController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objCarro = new Carro();
        $dados["lista"] = $objCarro->lista();
        $dados["view"] = "Carro/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objCarro = new Carro();
      $dados["carro"] = $objCarro->getCarro($id);
      $dados["view"] = "Carro/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Carro/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objCarro = new Carro();
      $carro = new \stdClass();
      $carro->nome         = $_POST["nome"];
      $carro->marca          = $_POST["marca"];
      $carro->cor     = $_POST["cor"];
      $carro->idcarro     =($_POST["idcarro"]) ? $_POST["idcarro"] : NULL;
      


      if($carro->idcarro) {

            //cchamar método do objcontato
        $objCarro->editar($carro);
           } else {
        $objCarro->inserir($carro);
      }
     header("location:".URL_BASE."carro");
         

   }
  
   public function excluir($id){
      $objCarro = new Carro();
      $objCarro->excluir($id);
      header("location:".URL_BASE."carro");


   }

}
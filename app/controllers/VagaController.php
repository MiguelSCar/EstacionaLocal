<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Vaga;

class VagaController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objVaga = new Vaga();
        $dados["lista"] = $objVaga->lista();
        $dados["view"] = "vaga/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objVaga = new Vaga();
      $dados["vaga"] = $objVaga->getVaga($id);
      $dados["view"] = "vaga/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "vaga/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objVaga = new Vaga();
      $vaga = new \stdClass();
      $vaga->estado         = $_POST["estado"];
      $vaga->preferencial          = $_POST["preferencial"];
      $vaga->idvaga     =($_POST["idvaga"]) ? $_POST["idvaga"] : NULL;
      


      if($vaga->idvaga) {

            //cchamar método do objcontato
        $objVaga->editar($vaga);
           } else {
        $objVaga->inserir($vaga);
      }
     header("location:".URL_BASE."vaga");
         

   }
  
   public function excluir($id){
      $objVaga = new Vaga();
      $objVaga->excluir($id);
      header("location:".URL_BASE."vaga");


   }

}
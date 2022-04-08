<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Aviso;

class AvisoController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objAviso = new Aviso();
        $dados["lista"] = $objAviso->lista();
        $dados["view"] = "aviso/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objAviso = new Aviso();
      $dados["aviso"] = $objAviso->getAviso($id);
      $dados["view"] = "aviso/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "aviso/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objAviso = new Aviso();
      $aviso = new \stdClass();
      $aviso->titulo         = $_POST["titulo"];
      $aviso->texto          = $_POST["texto"];
      $aviso->remetente      = $_POST["remetente"];
      $aviso->data           = $_POST["data"];
      $aviso->idaviso        =($_POST["idaviso"]) ? $_POST["idaviso"] : NULL;
      


      if($aviso->idaviso) {

            //cchamar método do objcontato
        $objAviso->editar($aviso);
           } else {
        $objAviso->inserir($aviso);
      }
     header("location:".URL_BASE."aviso");
         

   }
  
   public function excluir($id){
      $objAviso = new Aviso();
      $objAviso->excluir($id);
      header("location:".URL_BASE."aviso");


   }

}
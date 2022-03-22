<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Aluguel;

class AluguelController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objAluguel = new Aluguel();
        $dados["lista"] = $objAluguel->lista();
        $dados["view"] = "aluguel/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objAluguel = new Aluguel();
      $dados["aluguel"] = $objAluguel->getAluguel($id);
      $dados["view"] = "aluguel/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "aluguel/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objAluguel = new Aluguel();
      $aluguel = new \stdClass();
      $aluguel->carro         = $_POST["carro"];
      $aluguel->vaga          = $_POST["vaga"];
      $aluguel->tempo          = $_POST["tempo"];
      $aluguel->idaluguel     =($_POST["idaluguel"]) ? $_POST["idaluguel"] : NULL;
      


      if($aluguel->idaluguel) {

            //cchamar método do objcontato
        $objAluguel->editar($aluguel);
           } else {
        $objAluguel->inserir($aluguel);
      }
     header("location:".URL_BASE."aluguel");
         

   }
  
   public function excluir($id){
      $objAluguel = new Aluguel();
      $objAluguel->excluir($id);
      header("location:".URL_BASE."aluguel");


   }

}
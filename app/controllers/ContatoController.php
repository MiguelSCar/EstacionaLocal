<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objContato = new Contato();
        $dados["lista"] = $objContato->lista();
        $dados["view"] = "Contato/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objContato = new Contato();
      $dados["contato"] = $objContato->getContato($id);
      $dados["view"] = "Contato/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Contato/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objContato = new Contato();
      $contato = new \stdClass();
      $contato->nome         = $_POST["nome"];
      $contato->cep          = $_POST["cep"];
      $contato->endereco     = $_POST["endereco"];
      $contato->complemento  = $_POST["complemento"];
      $contato->numero       = $_POST["numero"];
      $contato->bairro       = $_POST["bairro"];
      $contato->cidade       = $_POST["cidade"];
      $contato->estado       = $_POST["estado"];
      $contato->celular      = $_POST["celular"];
      $contato->email        = $_POST["email"];
      $contato->dtnasc       = $_POST["dtnasc"];
      $contato->cpf          = $_POST["cpf"];
      $contato->idcontato     =($_POST["idcontato"]) ? $_POST["idcontato"] : NULL;
      


      if($contato->idcontato) {

            //cchamar método do objcontato
        $objContato->editar($contato);
           } else {
        $objContato->inserir($contato);
      }
     header("location:".URL_BASE."contato");
         

   }
  
   public function excluir($id){
      $objContato = new Contato();
      $objContato->excluir($id);
      header("location:".URL_BASE."contato");


   }

}
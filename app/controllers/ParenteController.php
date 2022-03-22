<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Parente;

class ParenteController extends Controller {
    public function index(){
       $objParente = new Parente();
       $dados["lista"] = $objParente->lista();
       $dados["view"]  = "Contato/indexpar";
       // echo "<pre>";
       //print_r($dados);
       //exit;

       $this->load("template",$dados);



    } 
    public function create(){
        //chamando a view q esta na pasta contato chamada create!
        $dados["view"]  = "Contato/createpar";
        $this->load("template",$dados);
       
    }

    public function salvar(){

        //criar um objeto do model Contato
        $objParente = new Parente();


        $parente = new \stdClass();
        
        //são artibutos desta pseudoClasse chamada parente
        $parente->nome         = $_POST["nome"];
        $parente->parentesco   = $_POST["parentesco"];
        $parente->dtnasc       = $_POST["dtnasc"];
        $parente->celular      = $_POST["celular"];
        $parente->email        = $_POST["email"];
        
        
        
        //Chamar o metodo inserir() que está no model Contato..
        $objParente->inserir($parente);

        header("location:".URL_BASE."parente");

    }
}
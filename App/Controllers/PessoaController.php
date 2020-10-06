<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Pessoa;

class PessoaController extends Controller{

    private $pessoaModel;
    
    public function __construct() {

        $this->pessoaModel = new Pessoa();
    }
    

    public function index(){
       
        $pessoas = $this->pessoaModel->getAll();

        $this->view("pessoa", ['pessoas' => $pessoas]);

    }
    
    public function editar(){
        
    }
    
    public function deletar(){
        
    }
    

}
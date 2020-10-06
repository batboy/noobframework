<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Clients;

class ClienteController extends Controller {
    
    public function index() {
        $clients = Clients::getAll();
        $this->view('clients', ['clients' -> $clients]);
    }

    public function editar() {
        die("Em breve...");
    }
}

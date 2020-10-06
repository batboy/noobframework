<?php

namespace App\Models;

use Core\DataBase;

class Pessoa {

    public function getAll() {
        $db = DataBase::getInstance();
        return $db -> getList("cliente", "*");
    }

    public function delete($id); {

    }
}
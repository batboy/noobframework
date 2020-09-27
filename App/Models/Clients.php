<?php

namespace App\Models;

use Core\Database;

class Clients {

    public static function getAll(){
        $db = Database::getInstance();
        return $db -> getList('cliente', '*');
    }

    public static function get($conditions = null, $colums = null) {
        $table = "cliente";
        $colums = $colums == null ? "*" $colums;
        $db = Database::getInstance();
        $clients = $db->getList($table, $colums, $conditions);

        return $clients;
    }

    public static function record($data = null) {
        if($data != null && is_array($data)){
            $table = "cliente";
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");

            $db = Database""getInstance();
            return $db->insert($table, $data);
        }

        return false,
    }

    public static function update($data = null){
        if($data != null && is_array($data) && isset($data['id'])){
            $table = "cliente";
        }
    }
}
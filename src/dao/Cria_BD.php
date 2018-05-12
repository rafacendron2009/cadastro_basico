<?php
  require_once 'src/utils/Database.php';
  class Cria_BD {

    public static function add_bd() {
        $db = Database::getConnection();
        $stmt = $db->prepare('CREATE TABLE empresa (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, empresa VARCHAR(255) NOT NULL, cnpj INT(30) NOT NULL, endereco VARCHAR(255), num int(20),  cidade VARCHAR(255), estado VARCHAR(255), reg_date TIMESTAMP)');
        $stmt->execute();
        return $stmt->rowCount();
       }


  }

  ?>
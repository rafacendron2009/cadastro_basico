<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO users (username, password, pergunta) VALUES (:username, :password,:pergunta)');
        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':password' => $user->getPassword(),
          ':pergunta' => $user->getPergunta()
        ));
        return $stmt->rowCount();
    }

    public static function verify($user) {
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
            ':username' => $user->getUsername()
        
        ));
        $rows = $stmt->fetchAll();
        $user_db_password = $rows[0]['password'];
        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }


    public static function redefine($user) {
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
                ':username' => $user->getUsername()
        ));
        $rows = $stmt->fetchAll();
        $user_db_pergunta= $rows[0]['pergunta'];
        if ($user->getPergunta() == $user_db_pergunta) {
            return true; 
        } else {
            return false;
        }
    }

    public static function redefiny_senha($user) {
        $db = Database::getConnection();
        $stmt = $db->prepare('UPDATE users SET password =:password WHERE username = :username');
        $stmt->execute(array(
            ':username'=> $user->getUsername(),
            ':password'=> $user->getPassword()
    ));
        return $stmt->rowCount();
        }
    }

?>
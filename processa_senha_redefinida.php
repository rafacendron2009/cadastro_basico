<?php
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    
    if ($_POST['senha'] == $_POST['senha_confirme']) {
        $user->setUsername(unserialize($_SESSION['user'])->getUsername());
        $user->setPassword($_POST['senha']);
        include_once "index.php";    
        
    } else {
        FlashMessage::setMessage('Senhas não conferem.', FlashMessage::OK);
        include_once "src/partials/altera_senha.php";        
    }

    $linhasAfetadas = UserDAO::redefiny_senha($user);
    
    if ($linhasAfetadas > 0) {
       FlashMessage::setMessage('Usuário cadastrado com sucesso.', FlashMessage::OK);
       include_once "index.php";       
        
    } else {
        FlashMessage::setMessage('Ocorreu um problema ao cadastrar o usuário.', FlashMessage::ERROR);
       
    }

    
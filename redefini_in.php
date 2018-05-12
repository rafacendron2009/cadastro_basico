<?php
require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';
 
    session_start();
    $user = new User;
    
    $user->setUsername($_POST['usuario']);
    $user->setPassword(null);
    $user->setPergunta($_POST['pergunta']);
    if($_POST['usuario']==null or$_POST['pergunta']==null){
        echo "Erro um log será enviado para o administrador";
    }else{
    $status = UserDAO::redefine($user);

    if ($status) {
       $user->setPergunta(null);
       $_SESSION['user'] = serialize($user);
       FlashMessage::setMessage('ATUALIZE SUA SENHA', FlashMessage::ERROR);
       include_once "src/partials/altera_senha.php";       
    } else {
        FlashMessage::setMessage('RESPOSTA INCORRETA', FlashMessage::ERROR);
        header('Location: /redefine.php');
    }
}
?>
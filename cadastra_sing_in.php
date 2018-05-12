<?php
    require_once 'src/entities/Empresa.php';
    require_once 'src/dao/EmpDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $emp = new Empresa;
    $emp->setEmpresa($_POST['empresa']);
    $emp->setCnpj($_POST['cnpj']);
    $emp->setEndereco($_POST['endereco']);
    $emp->setNum($_POST['num']);
    $emp->setCidade($_POST['cidade']);
    $emp->setEstado($_POST['estado']);
    
    
    $linhasAfetadas = EmpDAO::add($emp);

    if ($linhasAfetadas > 0) {
        FlashMessage::setMessage('Empresa '. $emp->getEmpresa().' cadastrada com sucesso.', FlashMessage::OK);
         header('Location: /dashboard.php');
     } else {
         FlashMessage::setMessage('Ocorreu um problema ao cadastrar a empresa.', FlashMessage::ERROR);
         header('Location: /dashboard.php');
     }


?>
    
    
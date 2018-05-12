<?php
    require_once 'src/entities/Empresa.php';
    require_once 'src/dao/EmpDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $emp = new Empresa;
    $emp->setid($_POST['id']);
    $emp->setEmpresa($_POST['empresa']);
    $emp->setCnpj($_POST['cnpj']);
    $emp->setEndereco($_POST['endereco']);
    $emp->setNum($_POST['num']);
    $emp->setCidade($_POST['cidade']);
    $emp->setEstado($_POST['estado']);
    
    
    $linhasAfetadas = EmpDAO::update_empresa($emp);

    if ($linhasAfetadas > 0) {
        FlashMessage::setMessage('Empresa '. $emp->getEmpresa().' Atualizado com sucesso.', FlashMessage::OK);
         header('Location: /consulta.php');
     } else {
         FlashMessage::setMessage('Ocorreu um problema ao atualizar a empresa.', FlashMessage::ERROR);
         header('Location: /consulta.php');
     }


?>
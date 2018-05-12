<?php 
    session_start();
    require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_verify_auth.php";
    require_once 'src/dao/EmpDAO.php';
    require_once 'src/entities/Empresa.php';
   

    $emp = new Empresa();
    $num = $_GET['id'];
    $emp->setId($num);
    EmpDAO::delete($emp);
    
  

 ?>
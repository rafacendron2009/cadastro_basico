<?php 

    session_start();
    require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_verify_auth.php";
    require_once 'src/dao/EmpDAO.php';
    require_once 'src/entities/Empresa.php';
    include_once "src/partials/_head.php" ;
    include_once "src/partials/_dash.php";
    
    $id = new Empresa();

?>      <br><br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        <?= FlashMessage::printMessage(); ?> 
                         
                        <center>    
                        <table class="table"  >
                            <tr>
                                          <th colspan="9"><center> EMPRESAS CADASTRADAS</center></th>
                              </tr>
                              <tr>
                                          <th colspan="9"><center></center></th>
                              </tr>
                                    <tr  width=200>
                                        <th><center> ID</center></th>
                                        <th><center>Empresa</center></th>
                                        <th><center>Cnpj</center></th>
                                        <th><center>Endereço</center></th>
                                        <th><center>Numero</center></th>
                                        <th><center>Cidade</center></th>
                                        <th><center>Estado</center></th>
                                        <th colspan="2"><center> Ações</center></th>
                                    </tr>
                                        <?php  
                                             
                                             $results = EmpDAO::consulta();
                                             foreach($results as $get) {                                                              
                                                $id->setId($get['id']);
                                         ?>
                 
                                          <tr>
                                                
                                                <td><center><?php echo $get['id'];?></center> </td>
                                                <td><center><?php echo $get['empresa'];?></center></td>
                                                <td><center><?php echo $get['cnpj'];?></center></td>
                                                <td><center><?php echo $get['endereco'];?><center></td>
                                                <td><center><?php echo $get['num'];?></center></td>
                                                <td><center><?php echo $get['cidade'];?></center></td>
                                                <td><center> <?php echo $get['estado'];?></center></td>
                                                <td><a href="update.php?id=<?=$get['id']; ?>" class="btn btn-info">Editar</a></td>
                                                <td><a onclick="return confirm('Deseja excluir mesmo?') " href="delete.php?id=<?= $get['id']; ?> " class='btn btn-danger'>Delete</a></td>
                                             </tr></center>
                                             <?php
                                                }
                                             ?>
                                        
                                  
                             </table></center>

<?php
include_once "src/partials/_final.php";
?>  



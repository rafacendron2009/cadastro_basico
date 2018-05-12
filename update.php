<?php 

    session_start();
    require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_verify_auth.php";
    require_once 'src/dao/EmpDAO.php';
    require_once 'src/entities/Empresa.php';
    include_once "src/partials/_head.php" ;
    include_once "src/partials/_dash.php";
    
    $id = new Empresa();
    $num = $_GET['id'];
?>      <br><br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                     
                        <center>    <table border =  6 width=200 height=40>
                            <tr>
                                          <th colspan="9"><center> EMPRESAS CADASTRADAS</center></th>
                              </tr>
                              <tr>
                                          <th colspan="9"><center></center></th>
                              </tr>
                                    <tr  width=200>
                                        <th>ID</th> 
                                        <th>Empresa</th>
                                        <th>Cnpj</th>
                                        <th>Endereço</th>
                                        <th>Numero</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th colspan="2"><center> Ações</center></th>
                                    </tr>
                                        <?php  
                                             
                                             $results = EmpDAO::consulta();
                                             foreach($results as $get) {                                                              
                                                $id->setId($get['id']);
                                                if($get['id']== $num ){  
                                         ?>


                                           <form action="alter.php" method="post" name="Login_Form" class="form-signin">
                                             <tr>
                                                
                                                <td><input class="form-control" name="id" value=" <?php echo $get['id'];?>"</td>
                                                <td><input type="text" class="form-control" name="empresa" value=" <?php echo $get['empresa'];?>"</td>
                                                <td><input type="text" class="form-control" name="cnpj" value=" <?php echo $get['cnpj'];?>"</td>
                                                <td><input type="text" class="form-control" name="endereco" value=" <?php echo $get['endereco'];?>"</td>
                                                <td><input type="text" class="form-control" name="num" value=" <?php echo $get['num'];?>"</td>
                                                <td><input type="text" class="form-control" name="cidade" value=" <?php echo $get['cidade'];?>"</td>
                                                <td><input type="text" class="form-control" name="estado" value=" <?php echo $get['estado'];?>"s<</td>
                                                <td><a disable href="" class="btn btn-info">Editar</a></td>
                                                <td><a onclick="return confirm('Deseja excluir mesmo?') " href="delete.php?id=<?= $get['id']; ?> " class='btn btn-danger'>Delete</a></td>
                                                <td> <button  class="btn btn-info"  type="submit" >Confirmar</button><td>  			

                                             </tr>
                                             </form>
                                             <?php
                                              }else{
                                                ?>

                                        <tr>
                                                <td><?php echo $get['id'];?></td>
                                                <td><?php echo $get['empresa'];?></td>
                                                <td><?php echo $get['cnpj'];?></td>
                                                <td><?php echo $get['endereco'];?></td>
                                                <td><?php echo $get['num'];?></td>
                                                <td><?php echo $get['cidade'];?></td>
                                                <td><?php echo $get['estado'];?></td>
                                                <td><a href="update.php?id=<?=$get['id']; ?>" class="btn btn-info">Editar</a></td>
                                                <td><a onclick="return confirm('Deseja excluir mesmo?')" value="<?= $get['id']; ?>" href="delete.php?id=<?= $get['id']; ?> " class='btn btn-danger'>Delete</a></td>
                                             </tr>
 


                                                <?php
                                              } }
                                             ?>
                                        
                                  
                             </table></center>

<?php
include_once "src/partials/_final.php";
?>  
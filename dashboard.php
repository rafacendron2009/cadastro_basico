<?php 
session_start();
require_once "src/utils/FlashMessage.php";
include_once "src/partials/_verify_auth.php";
include_once "src/partials/_head.php" ;
include_once "src/partials/_dash.php";
?>  
    

                    <center><h1>CADASTRAR EMPRESA </h1></center>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        <?= FlashMessage::printMessage(); ?> 
                         
        <form method="Post" action="cadastra_sing_in.php">
            <center><h5>Empresa</h5></center>
            <input type="text" id="empresa" name="empresa" autofocus class="form-control input-md"  required="" tabindex="1" />
            <center><h5>CNPJ:</h5></center>
            <input type="number" id="cnpj" name="cnpj"  class="form-control input-md" required=""  tabindex="2"  />
            <center><h5>Endereço: </h5></center>
            <input type="text" id="endereco" name="endereco" class="form-control input-md" required=""  tabindex="3"  />
            <center><h5>N°  </label>
            <input type="number" id="num" name="num" class="form-control input-md" tabindex="4" />
            <center><h5>Cidade: </h5></center>
            <input type="text" id="cidade" name="cidade" class="form-control input-md" required="" tabindex="5" />
            <center><h5>Estado:</h5></center>
            <input type="text" id="estado" name="estado" class="form-control input-md" required="" tabindex="6" />
            <br>
            <button type="submit" size="10"class="btn btn-labeled btn-success" tabindex="7">Cadastra</button>
            <button type="reset"class="btn btn-success" tabindex="8" >Limpa</button>         
        </form>

<?php
include_once "src/partials/_final.php";
?>  
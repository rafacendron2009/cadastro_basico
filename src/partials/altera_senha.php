<?php
require_once "src/utils/FlashMessage.php";
include_once "src/partials/_head.php";
?>

<div class = "container">
    <div class="wrapper">
        <form action="processa_senha_redefinida.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  
            
            <h3 class="form-signin-heading">Redefinir senha</h3>
            <hr class="colorgraph"><br>
            <input type="password" class="form-control" name="senha" placeholder="Digite sua nova senha " required="" tabindex="1"/>
            <input type="password" class="form-control" name="senha_confirme" placeholder="Confirme sua nova senha" required="" tabindex="2"/>      		  
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Salvar</button>  			
            <br>
           
            <hr />
            
        </form>			
    </div>
</div>
</body>
</html>
<?php
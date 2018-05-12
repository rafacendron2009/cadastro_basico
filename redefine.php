<?php 

session_start();
require_once "src/utils/FlashMessage.php";
include_once "src/partials/_head.php"

?>

<div class = "container">
    <div class="wrapper">
        <form action="redefini_in.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage();  ?>  

            <h3 class="form-signin-heading">Redefinir senha</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />
            <input type="text" class="form-control" name="pergunta" placeholder="Digite o nome do seu melhor amigo" required="" autofocus="" tabindex="1" />
            	  
            <br>
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Redefinir</button>  			
        
        
            <hr />
           
            <a href="index.php" class="btn btn-lg btn-default btn-block">Inicio</a>
            
        </form>			
    </div>
</div>

</body>
</html>
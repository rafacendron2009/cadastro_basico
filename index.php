<?php 

session_start();
require_once "src/utils/FlashMessage.php";

include_once "src/partials/_head.php"


?>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-2">Forgot Password?</label>
				</div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>

<div class = "container">
    <div class="wrapper">
        <form action="sign_in.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  

            <h3 class="form-signin-heading">Seja bem vindo!</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="" tabindex="2"/>     		  
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Entrar</button>  			
            <br>
            Esqueceu a senha <a href="redefine.php">CLIQUE AQUI</a>
            <hr />
            
           
            <a href="sign_up.php" class="btn btn-lg btn-default btn-block">Cadastrar-se</a>
            
        </form>			
    </div>
</div>

</body>
</html>
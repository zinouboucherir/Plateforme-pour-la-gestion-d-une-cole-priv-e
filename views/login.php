<?php
namespace app\views;
class login{
public function loginbody(){
?>
<div class="login-form">
    <form action="login" method="post">
		<div class="avatar">
			<img src="http://cdn.onlinewebfonts.com/svg/img_568656.png" alt="Avatar">
		</div>
        <h2 class="text-center">Administrateur</h2>  
        <?php 
            if(@$_GET['Empty']==true)
              {
          ?>
          <div class="alert alert-danger">
          <?php echo $_GET['Empty'] ?>
        </div>
              </br>
            <?php 
              }
          ?>
             <?php 
            if(@$_GET['invalid']==true)
              {
          ?>
                 <div class="alert alert-danger">
          <?php echo $_GET['invalid'] ?>
        </div>
              </br>
            <?php 
              }
          ?>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
	
    </form>
</div>
<?php
} 
public function afficher_login(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $h=new home_view();
    $h->head();
    ?>
    <body>
    <?php 
    $this->loginbody();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
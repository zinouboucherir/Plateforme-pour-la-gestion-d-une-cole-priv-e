<?php
namespace app\views;
class parentlogin{
public function parentloginbody(){
?>
<div class="login-form" style="opacity: 0.8;">
    <form action="parentlogin" method="post">
		<div class="avatar">
			<img src="http://cdn.onlinewebfonts.com/svg/img_568656.png" alt="Avatar">
		</div>
        <h2 class="text-center">Authentification du Parent</h2>  
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
            <button type="submit" class="btn btn-primary btn-lg btn-block">Connecter</button>
        </div>
	
    </form>
</div>
<?php
} 
public function afficher_parentlogin(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $h=new home_view();
    $h->head();
    ?>
    <body style="background-image: url('https://cdn.cdnparenting.com/articles/2018/05/578885038-H-1024x700.jpg');">
    <?php 

    $menu=new menu();
    $menu->getmenu();
    $this->parentloginbody();
   
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>



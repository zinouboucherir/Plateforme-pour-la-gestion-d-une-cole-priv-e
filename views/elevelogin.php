<?php
namespace app\views;
class elevelogin{
public function eleveloginbody(){
?>
<div class="login-form" style="  opacity: 0.8;">
    <form action="elevelogin" method="post">
		<div class="avatar">
			<img src="http://cdn.onlinewebfonts.com/svg/img_568656.png" alt="Avatar">
		</div>
        <h2 class="text-center">Authentification d'Eléve</h2>   
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
        	<input type="text" class="form-control" name="username" placeholder="Nom d'utiliateur" required="required">
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
public function afficher_elevelogin(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $h=new home_view();
    $h->head();
    ?>
    <body style="background-image: url('https://typeachecklist.files.wordpress.com/2015/08/high-school-students.jpg');">
    <?php 

    $menu=new menu();
    $menu->getmenu();
    $this->eleveloginbody();
   
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>

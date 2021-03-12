<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>login</title>
<link rel="stylesheet" href="css/loginstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <link rel="stylesheet" href="css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    body{
     background-image: url("https://typeachecklist.files.wordpress.com/2015/08/high-school-students.jpg");
    }
</style>
<body>
<?php include('menu.html')?>
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
</body>
</html>
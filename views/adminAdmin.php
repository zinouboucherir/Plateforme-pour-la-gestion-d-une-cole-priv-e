<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <script src="JS/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="JS/accueiljs.js"></script>
</head>
<body>

<?php include('adminMenu.php') ?>

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addAdmin" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Admin</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                     <label>Login</label>
						<input type="texte" class="form-control" name="login" required >				
                    </div>
                    <div class="form-group">
                     <label>Password</label>
						<input type="password" class="form-control" name="password" required >				
                    </div>
                    <div class="form-group">
                     <label>Nom</label>
						<input type="texte" class="form-control" name="nom" required  >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte" class="form-control" name="prenom" required  >				
                    </div>
                    <div class="form-group">		
                    <label>Adresse</label>
						<input type="texte" class="form-control" name="adresse" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone1</label>
                    <div class="form-group">	
						<input type="texte" class="form-control" name="tlfn1" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone2</label>
						<input type="texte" class="form-control" name="tlfn2" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone3</label>
						<input type="texte" class="form-control" name="tlfn3" required >				
                    </div>
                    <div class="form-group">	
                    <label>email</label>
						<input type="email" class="form-control" name="email" required >				
                    </div>						
				    </div>		
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input  class="btn btn-success" type="submit" name="upload" value="upload Emploi">
				</div>
			</form>
		</div>
	</div>
</div>
                        </div>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des Administrateurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau admin</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
                        <th>id</th>
                        <th>login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>téléphone1</th>
                        <th>téléphone2</th>
                        <th>téléphone3</th>
                        <th>Email</th>
                    
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$admins->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['id']?></td>
                        <td style="width:15%;"><?php echo $data['login']?></td>
                        <td style="width:15%;"><?php echo $data['nom']?></td>	
                        <td style="width:15%;"><?php echo $data['prenom']?></td>
                        <td style="width:15%;"><?php echo $data['adresse']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn1']?></td>	 
                        <td style="width:15%;"><?php echo $data['tlfn2']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn3']?></td>
                        <td style="width:15%;"><?php echo $data['email']?></td>	   
                      	             
                        <td style="width: 10%;" >
							<a href="#editEmployeeModal<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal<?php echo $data['id']?>" class="modal fade">
						<div class="modal-dialog">
						<div class="modal-content">
						<form>
							<div class="modal-header">						
								<h4 class="modal-title">Delete Employee</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<a href="<?php echo"admindelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="adminupdate" enctype="multipart/form-data">
                <div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input  class="btn btn-success" type="submit" name="upload" value="modifier">
				</div>
				<div class="modal-header">						
					<h4 class="modal-title">Modifier</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
			<div class="modal-body">					
				 <div class="form-group">
                    <input hidden type="text" class="form-control" name="id" required value="<?php echo $data['id']?>">
                </div>
                    <div class="form-group">
                     <label>Login</label>
						<input type="texte" class="form-control" name="login" required value="<?php echo $data['login']?>">				
                    </div>
                    <div class="form-group">
                     <label>Nom</label>
						<input type="texte" class="form-control" name="nom" required value="<?php echo $data['nom']?>" >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte" class="form-control" name="prenom" required value="<?php echo $data['prenom']?>" >				
                    </div>
                   <div class="form-group">	
                    <label>Adresse</label>
						<input type="texte" class="form-control" name="adresse" required value="<?php echo $data['adresse']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone1</label>
						<input type="texte" class="form-control" name="tlfn1" required value="<?php echo $data['tlfn1']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone2</label>
						<input type="texte" class="form-control" name="tlfn2" required value="<?php echo $data['tlfn2']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone3</label>
						<input type="texte" class="form-control" name="tlfn3" required value="<?php echo $data['tlfn3']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>email</label>
						<input type="email" class="form-control" name="email" required value="<?php echo $data['email']?>" >				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $admins->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
</section>
</body>
</html>
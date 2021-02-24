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
<div id="addEmployeeModal1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addTelephone" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter numéro de Téléphone</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Téléphone</label>
                    <div class="form-group">	
						<input type="texte" class="form-control" name="numero" required >				
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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des numéro de  téléphone</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal1" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau numéro de téléphone</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-striped" >
				<thead>
					<tr>
                        <th>numéro de téléphone</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$telephones->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['numero']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal1<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal1<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal1<?php echo $data['id']?>" class="modal fade">
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
							<a href="<?php echo"telephonedelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal1<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="telephoneupdate" enctype="multipart/form-data">
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
						<input type="texte" class="form-control" name="numero" required value="<?php echo $data['numero']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $telephones->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
 <!--------------------------------------------------------------------------------------------------->
 <div id="addEmployeeModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addFax" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter numéro de Fax</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Fax</label>
                    <div class="form-group">	
						<input type="texte" class="form-control" name="fax" required >				
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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des numéro de  fax</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal2" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau numéro de fax</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-striped" >
				<thead>
					<tr>
                        <th>numéro de fax</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$faxs->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['fax']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal2<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal2<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal2<?php echo $data['id']?>" class="modal fade">
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
							<a href="<?php echo"faxdelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal2<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="faxupdate" enctype="multipart/form-data">
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
						<input type="texte" class="form-control" name="fax" required value="<?php echo $data['fax']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $faxs->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
<!--------------------------------------------------------------------------------------------------->
<div id="addEmployeeModal3" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addEmail" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter email</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Email</label>
                    <div class="form-group">	
						<input type="texte" class="form-control" name="email" required >				
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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des E-mails</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal3" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau email</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-striped" >
				<thead>
					<tr>
                        <th>E-mails</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$emails->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['email']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal3<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal3<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal3<?php echo $data['id']?>" class="modal fade">
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
							<a href="<?php echo"emaildelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal3<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="emailupdate" enctype="multipart/form-data">
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
						<input type="texte" class="form-control" name="email" required value="<?php echo $data['email']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $emails->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
<!--------------------------------------------------------------------------------------------------->

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des adresses</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-striped" style="width:100%;" >
				<thead>
					<tr>
                        <th>Adresse</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    $data=$adresse->fetch()
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['adresse']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal4<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal4<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal4<?php echo $data['id']?>" class="modal fade">
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
							<a href="<?php echo"adressedelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal4<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="adresseupdate" enctype="multipart/form-data">
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
						<input type="texte" class="form-control" name="adresse" required value="<?php echo $data['adresse']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
	</tbody>
		</table>
	</div>
	</div>        
</div>
</body>
</html>
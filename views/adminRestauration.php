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

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>de la restauration</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-striped" id="myTable" >
				<thead>
					<tr>
                        <th>Jour</th>
						<th>entrée</th>
						<th>plat principale</th>
                        <th>dessert</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$restaus->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['jour']?></td>		
                        <td style="width:15%;"><?php echo $data['entrée']?></td>
                        <td style="width:15%;"><?php echo $data['principale']?></td>
                        <td style="width:15%;"><?php echo $data['dessert']?></td>
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
							<a href="<?php echo"restaudelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="restauupdate" enctype="multipart/form-data">>
				<div class="modal-header">						
					<h4 class="modal-title">Modifier</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<input hidden type="text" class="form-control" name="id" required value="<?php echo $data['id']?>">
                    <label>jour</label>
                    <select name="jour" type="text" name="type" class="form-control">
		  					<option value="dimanche">dimanche</option>
							<option value="lundi">lundi</option>
							<option value="mardi">mardi</option>
							<option value="mercredi">mercredi</option>
							<option value="jeudi">jeudi</option>
							<option value="vendredi">vendredi</option>
                            <option value="samedi">samedi</option>
				    </select>
					</div>
					<div class="form-group">
						<label>entrée</label>
						<input class="form-control" name="entrée" required value="<?php echo $data['entrée']?>" >
					</div>		
                    <div class="form-group">
						<label>plat principale</label>
                        <input class="form-control" name="principale" required value="<?php echo $data['principale']?>" >
					</div>		
                    <div class="form-group">
						<label>dessert</label>
                        <input class="form-control" name="dessert" required value="<?php echo $data['dessert']?>">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input  class="btn btn-success" type="submit" name="upload" value="modifier">
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $restaus->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addRestau" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
                <label>jour</label>
                    <select name="jour" type="text" name="type" class="form-control">
		  					<option value="dimanche">dimanche</option>
							<option value="lundi">lundi</option>
							<option value="mardi">mardi</option>
							<option value="mercredi">mercredi</option>
							<option value="jeudi">jeudi</option>
							<option value="vendredi">vendredi</option>
                            <option value="samedi">samedi</option>
				    </select>
					</div>
					<div class="form-group">
						<label>entrée</label>
						<input class="form-control" name="entrée" required ></input>
					</div>		
                    <div class="form-group">
						<label>plat principale</label>
                        <input class="form-control" name="principale" required ></input>
					</div>		
                    <div class="form-group">
						<label>dessert</label>
                        <input class="form-control" name="dessert" required ></input>
					</div>	
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input  class="btn btn-success" type="submit" name="upload" value="upload article">
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
    <div class="footer">
        <ul>
            <li class="footeritem"><a href="#" class="text-light">Accueil</a> </li>
            <li class="footeritem"><a href="#presentation" class="text-light">Présentation</a></li>
            <li class="footeritem"><a href="#" class="text-light">Primaire</a></li>
            <li class="footeritem"><a href="#" class="text-light">Moyen</a></li>
            <li class="footeritem"><a href="#" class="text-light">Secondaire</a></li>
            <li class="footeritem"><a href="#" class="text-light">Espace éléve</a> </li>
            <li class="footeritem"><a href="#" class="text-light">Espace Parent</a></li>
        </ul>
        <div>
            <a href="#" class="fa fa-facebook footeritem text-light"></a>
            <a href="#" class="fa fa-twitter footeritem text-light"></a>
            <a href="#" class="fa fa-instagram footeritem text-light"></a>
            <a href="#" class="fa fa-youtube footeritem text-light"></a>
        </div>
        <br/>
   </div>
</footer>
</body>
</html>
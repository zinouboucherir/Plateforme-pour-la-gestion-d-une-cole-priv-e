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
			<form  method="POST" action="<?php echo"addEnfant?id= ".$id_parent ?>" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter une enfant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                <label>Nouveau Enfant</label>
						<select name="id_enfant" required class="form-control">
                    <?php 
                    
                        while ($row = $eleves->fetch())
                            {
                            echo "<option value=\"".$row['id']."\">" . $row['nom'].' '.$row['prenom'] . "</option>";
                            }
                    ?>
                </select>				
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
						<h2>Gestion <b>des Enfants</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau enfant</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
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
                    while ($data=$enfants->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['nom']?></td>	
                        <td style="width:15%;"><?php echo $data['prenom']?></td>
                        <td style="width:15%;"><?php echo $data['adresse']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn1']?></td>	 
                        <td style="width:15%;"><?php echo $data['tlfn2']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn3']?></td>
                        <td style="width:15%;"><?php echo $data['email']?></td>	        
                        <td style="width: 10%;" >
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
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"enfantdelete?id=".$data['id']."&id_parent=".$id_parent?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
        <?php
          }
        $enfants->closeCursor();
        ?>
			</tbody>
		</table>
</div>
</section>

</body>
</html>
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
			<form  method="POST" action="<?php echo"addEnsClasse?id= ".$id_ens ?>" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter une classe</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                <label>Nouvelle classe</label>
						<select name="id_classe" required class="form-control">
                    <?php 
                    
                        while ($row = $allclasse->fetch())
                            {
                            echo "<option value=\"".$row['id']."\">" .$row['annee'].substr($row['cycle'],0,1).$row['numroClasse']. "</option>";
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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des classes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau enfant</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-striped" id="myTable" >
				<thead>
					<tr>
                        <th>Année</th>
                        <th>Numéro de classe</th>
                        <th>Cycle</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$classes->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['annee']?></td>	
                        <td style="width:15%;"><?php echo $data['numroClasse']?></td>
                        <td style="width:15%;"><?php echo $data['cycle']?></td>   
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
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<a href="<?php echo"ensclassedelete?id=".$data['id']."&id_ens=".$id_ens?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
        <?php
          }
        $classes->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
	</div>        
</div>
</body>
</html>
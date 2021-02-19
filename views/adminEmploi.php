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
						<h2>Gestion <b>des Emploi du temps</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel emploi du temps</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-striped table-wrapper-scroll-y my-custom-" id="myTable" >
				<thead>
					<tr>
                      <th>classe</th>
                        <th>cycle</th>
                        <th>jour</th>
						<th>8-9</th>
						<th>9-10</th>
                        <th>10-11</th>
						<th>11-12</th>
                        <th>12-13</th>
                        <th>13-14</th>
						<th>14-15</th>
                        <th>15-16</th>
						<th>16-17</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$emplois->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['classe']?></td>
                        <td style="width:15%;"><?php echo $data['cycle']?></td>
                        <td style="width:15%;"><?php echo $data['jour']?></td>	
                        <td style="width:15%;"><?php echo $data['t1']?></td>
                        <td style="width:15%;"><?php echo $data['t2']?></td>
                        <td style="width:15%;"><?php echo $data['t3']?></td>
                        <td style="width:15%;"><?php echo $data['t4']?></td>
                        <td style="width:15%;"><?php echo $data['t5']?></td>	
                        <td style="width:15%;"><?php echo $data['t6']?></td>
                        <td style="width:15%;"><?php echo $data['t7']?></td>
                        <td style="width:15%;"><?php echo $data['t8']?></td>
                        <td style="width:15%;"><?php echo $data['t9']?></td>
                    
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
							<a href="<?php echo"emploidelete?id=".$data['id']?>" class="btn btn-danger text-center">Delete</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="emploiupdate" enctype="multipart/form-data">
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
                     <label>cycle</label>
                     <select name="cycle" type="text" name="type" class="form-control">
		  					<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
				    </select>	
                    </div>
                <div class="form-group">
                <label>classe</label>
						<input type="text" class="form-control" name="classe" required value="<?php echo $data['classe']?>">				
                </div>
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
                     <label>8-9</label>
						<input type="text" class="form-control" name="t1" required value="<?php echo $data['t1']?>">				
                    </div>
                    <div class="form-group">
                     <label>9-10</label>
						<input type="text" class="form-control" name="t2" required value="<?php echo $data['t2']?>" >				
                    </div>		
                    <div class="form-group">
                     <label>10-11</label>
						<input type="text" class="form-control" name="t3" required value="<?php echo $data['t3']?>">				
                    </div>		
                    <div class="form-group">
                     <label>11-12</label>
						<input type="text" class="form-control" name="t4" required value="<?php echo $data['t4']?>">				
                    </div>		
                    <div class="form-group">
                     <label>12-13</label>
						<input type="text" class="form-control" name="t5" required value="<?php echo $data['t5']?>">				
                    </div>		
                    <div class="form-group">
                     <label>13-14</label>
						<input type="text" class="form-control" name="t6" required value="<?php echo $data['t6']?>" >				
                    </div>		
                    <div class="form-group">
                     <label>14-15</label>
						<input type="text" class="form-control" name="t7" required value="<?php echo $data['t7']?>">				
                    </div>
                    <div class="form-group">
                     <label>15-16</label>
						<input type="text" class="form-control" name="t8" required value="<?php echo $data['t8']?>">				
                    </div>
                    <div class="form-group">
                     <label>16-17</label>
						<input type="text" class="form-control" name="t9" required value="<?php echo $data['t9']?>" >				
                    </div>									
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $emplois->closeCursor();
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
			<form  method="POST" action="addEmploi" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Emploi du temps</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
                     <label>cycle</label>
                     <select name="cycle" type="text" name="type" class="form-control">
		  					<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
				    </select>	
                    </div>
                <div class="form-group">
                <label>classe</label>
						<input type="text" class="form-control" name="classe" required >				
                </div>
        
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
                     <label>8-9</label>
						<input type="text" class="form-control" name="t1" required >				
                    </div>
                    <div class="form-group">
                     <label>9-10</label>
						<input type="text" class="form-control" name="t2" required >				
                    </div>		
                    <div class="form-group">
                     <label>10-11</label>
						<input type="text" class="form-control" name="t3" required >				
                    </div>		
                    <div class="form-group">
                     <label>11-12</label>
						<input type="text" class="form-control" name="t4" required >				
                    </div>		
                    <div class="form-group">
                     <label>12-13</label>
						<input type="text" class="form-control" name="t5" required >				
                    </div>		
                    <div class="form-group">
                     <label>13-14</label>
						<input type="text" class="form-control" name="t6" required >				
                    </div>		
                    <div class="form-group">
                     <label>14-15</label>
						<input type="text" class="form-control" name="t7" required >				
                    </div>
                    <div class="form-group">
                     <label>15-16</label>
						<input type="text" class="form-control" name="t8" required >				
                    </div>
                    <div class="form-group">
                     <label>16-17</label>
						<input type="text" class="form-control" name="t9" required >				
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
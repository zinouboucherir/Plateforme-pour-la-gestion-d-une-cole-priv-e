<?php
namespace app\views;
class adminEmploi{
public function adminEmploibody($emplois,$cl){
?>
<section>
</section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des Emploi du temps</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
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
                        <td style="width:15%;"><?php echo $data['annee'].substr($data['cycle'],0,1).$data['numroClasse']?></td>
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
								<h4 class="modal-title">Supprimer jour</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer ce jour?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"emploidelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
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
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input  class="btn btn-success" type="submit" name="upload" value="Modifier">
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

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addEmploi" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter un jour</h4>
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
						<select name="classe" required class="form-control">
                    <?php 
                        while ($row = $cl->fetch())
                            {
                            echo "<option value=\"".$row['id']."\">" . $row['annee'].substr($row['cycle'],0,1).$row['numroClasse'] . "</option>";
                            }
                    ?>
                </select>				
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
<?php
}
public function afficher_adminEmploi($emplois,$cl){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $h=new home_view();
    $h->head();
    ?>
    <body>
    <?php 
    $header=new header();
    $header->getheader();
    $menu=new adminMenu();
    $menu->getmenu();
    $this->adminEmploibody($emplois,$cl);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>

<?php
namespace app\views;
class adminRestauration{
public function adminRestaurationbody($restaus){
?>



<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>de la restauration</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success"  data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white"  id="myTable" >
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
                        <td style="width:30%;"><?php echo $data['jour']?></td>		
                        <td style="width:30%;"><?php echo $data['entrée']?></td>
                        <td style="width:30%;"><?php echo $data['principale']?></td>
                        <td style="width:30%;"><?php echo $data['dessert']?></td>
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
								<h4 class="modal-title">Supprimer un jour</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer ce jour?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"restaudelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="restauupdate" enctype="multipart/form-data">
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
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input  class="btn btn-success" type="submit" name="upload" value="Modifier">
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
</section>
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

<?php
}
public function afficher_adminRestauration($restaus){
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
    $this->adminRestaurationbody($restaus);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>


<?php
namespace app\views;
class adminClasse{
public function adminClassesbody($classes){
?>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des Classes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une nouvelle classe</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
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
                        <td style="width:10%;"><?php echo $data['annee']?></td>
                        <td style="width:10%;"><?php echo $data['numroClasse']?></td>
                        <td style="width:10%;"><?php echo $data['cycle']?></td>	            
                        <td style="width: 2%;" >
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
								<h4 class="modal-title">Supprimer Classe</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cette classe?</p>
							<p class="text-warning"><small>son action ne peut être annulée..</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"classedelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="classeupdate" enctype="multipart/form-data">
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
                </div>	
                    <div class="form-group">
                     <label>Annnée</label>
						<input type="number" min="1" class="form-control" name="annee" required value="<?php echo $data['annee']?>">				
                    </div>
                    <div class="form-group">
                     <label>Numéro de classe</label>
						<input type="number" min="1" class="form-control" name="numroClasse" required value="<?php echo $data['numroClasse']?>" >				
                    </div>		
                    <div class="form-group">
                     <label>Cycle</label>
                     <select name="cycle" type="text" name="type" class="form-control">
		  					<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
				    </select>
                    </div>							
				    </div>							
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
	
</section>

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addClasse" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter une classe</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
                     <label>Annnée</label>
						<input type="number" min="1" class="form-control" name="annee" required>				
                    </div>
                    <div class="form-group">
                     <label>Numéro de classe</label>
						<input type="number" min="1" class="form-control" name="numroClasse" required>				
                    </div>		
                    <div class="form-group">
                     <label>Cycle</label>
                     <select name="cycle" type="text" name="type" class="form-control">
		  					<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
				    </select>
                    </div>									
				    </div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input  class="btn btn-success" type="submit" name="upload" value="Ajouter">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
public function afficher_adminClasse($classes){
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
    $this->adminClassesbody($classes);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
<?php
namespace app\views;
class adminEnfant{
public function adminEnfantbody($eleves,$enfants,$id_parent){
?>

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="<?php echo"addEnfant?id= ".$id_parent ?>" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter un enfant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                <label>Nouvel Enfant</label>
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
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel enfant</span></a>	
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
								<h4 class="modal-title">Supprimer enfant</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cet enfant?</p>
							<p class="text-warning"><small>son action ne peut être annulée..</small></p>
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
<?php
}
public function afficher_adminEnfant($eleves,$enfants,$id_parent){
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
    $this->adminEnfantbody($eleves,$enfants,$id_parent);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>

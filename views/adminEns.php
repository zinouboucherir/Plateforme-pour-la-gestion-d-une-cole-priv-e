<?php
namespace app\views;
class adminEns{
public function adminEnsbody($ens){
?>

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addEns" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Enseignant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                     <label>Nom</label>
						<input type="texte" pattern="[a-zA-Z]*" class="form-control" name="nom" required  >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte" pattern="[a-zA-Z]*" class="form-control" name="prenom" required  >				
                    </div>
                    <div class="form-group">		
                    <label>Matiére</label>
						<input type="texte" class="form-control" name="matiere" required >				
                    </div>
                    <div class="form-group">
						<label>jour de réception</label>
						<select name="jour" type="text" name="type" class="form-control">
		  					<option value="dimanche">dimanche</option>
							<option value="lundi">lundi</option>
							<option value="mardi">mardi</option>
							<option value="mercredi">mercredi</option>
							<option value="jeudi">jeudi</option>
				    </select>
					</div>
                    <div class="form-group">
						<label>Heure de réception</label>
						<select name="heure" type="text" name="type" class="form-control">
                        <option value="9H-10H">9H-10H</option>
							<option value="10H-11H">10H-11H</option>
							<option value="11H-12H">11H-12H</option>
							<option value="12H-13H">12H-13H</option>
							<option value="13H-14H">13H-14H</option>
							<option value="14H-15H">14H-15H</option>
                            <option value="15H-16H">15H-16H</option>
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
                        </div>

<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des Enseignants</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel enseignant</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matiére</th>
                        <th>joure de réception</th>
                        <th>heure de réception</th>
                        <th>Classes</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$ens->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:25%;"><?php echo $data['nom']?></td>	
                        <td style="width:25%;"><?php echo $data['prenom']?></td>
                        <td style="width:25%;"><?php echo $data['matiere']?></td>
                        <td style="width:25%;"><?php echo $data['jourRec']?></td>	
                        <td style="width:25%;"><?php echo $data['heureRec']?></td> 
                        <td style="width:20%;"><a href="<?php echo"adminEnsClasse?id=".$data['id']?>" class="btn btn-warning text-center">Classes</a></td>	             
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
								<h4 class="modal-title">Supprimer enseignant </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cet enseignant?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"ensdelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="ensupdate" enctype="multipart/form-data">
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
                     <label>Nom</label>
						<input type="texte" pattern="[a-zA-Z]*" class="form-control" name="nom" required value="<?php echo $data['nom']?>" >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte"pattern="[a-zA-Z]*" class="form-control" name="prenom" required value="<?php echo $data['prenom']?>" >				
                    </div>
                    <div class="form-group">		
                    <label>Matiére</label>
						<input type="texte" class="form-control" name="matiere" required value="<?php echo $data['matiere']?>">				
                    </div>
                    <div class="form-group">
						<label>jour de réception</label>
						<select name="jour" type="text" name="type" class="form-control">
		  					<option value="dimanche">dimanche</option>
							<option value="lundi">lundi</option>
							<option value="mardi">mardi</option>
							<option value="mercredi">mercredi</option>
							<option value="jeudi">jeudi</option>
			
				    </select>
					</div>
                    <div class="form-group">
						<label>Heure de réception</label>
						<select name="heure" type="text" name="type" class="form-control">
		  					<option value="9H-10H">9H-10H</option>
							<option value="10H-11H">10H-11H</option>
							<option value="11H-12H">11H-12H</option>
							<option value="12H-13H">12H-13H</option>
							<option value="13H-14H">13H-14H</option>
							<option value="14H-15H">14H-15H</option>
                            <option value="15H-16H">15H-16H</option>
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
        $ens->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
</section>
<?php
}
public function afficher_adminEns($ens){
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
    $this->adminEnsbody($ens);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
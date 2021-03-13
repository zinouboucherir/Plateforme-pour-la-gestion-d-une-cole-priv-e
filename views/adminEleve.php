<?php
namespace app\views;
class adminEleve{
public function adminElevebody($eleves,$classes){
?>
<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addEleve" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter un éléve</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">
                     <label>Login</label>
						<input type="texte" class="form-control" name="login" required >				
                    </div>
                    <div class="form-group">
                     <label>Password</label>
						<input type="password" class="form-control" name="password" required >				
                    </div>
                    <div class="form-group">
                     <label>Nom</label>
						<input type="texte" pattern="[A-Za-z]*" class="form-control" name="nom" required  >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte" pattern="[A-Za-z]*" class="form-control" name="prenom" required  >				
                    </div>
                    <div class="form-group">		
                    <label>Adresse</label>
						<input type="texte" class="form-control" name="adresse" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone1</label>
                    <div class="form-group">	
						<input type="texte" pattern="0[0-9]{9}"class="form-control" name="tlfn1" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone2</label>
						<input type="texte" pattern="0[0-9]{9}" class="form-control" name="tlfn2" required >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone3</label>
						<input type="texte" pattern="0[0-9]{9}" class="form-control" name="tlfn3" required >				
                    </div>
                    <div class="form-group">	
                    <label>email</label>
						<input type="email" class="form-control" name="email" required >				
                    </div>
                    <div class="form-group">
                <label>classe</label>
						<select name="classe" required class="form-control">
                    <?php 
                    
                        while ($row = $classes->fetch())
                            {
                            echo "<option value=\"".$row['id']."\">" . $row['annee'].substr($row['cycle'],0,1).$row['numroClasse'] . "</option>";
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
						<h2>Gestion <b>des Eléves</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une nouvel classe</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
                        <th>id</th>
                        <th>login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>téléphone1</th>
                        <th>téléphone2</th>
                        <th>téléphone3</th>
                        <th>Email</th>
                        <th>Classe</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$eleves->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['id']?></td>
                        <td style="width:15%;"><?php echo $data['login']?></td>
                        <td style="width:15%;"><?php echo $data['nom']?></td>	
                        <td style="width:15%;"><?php echo $data['prenom']?></td>
                        <td style="width:15%;"><?php echo $data['adresse']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn1']?></td>	 
                        <td style="width:15%;"><?php echo $data['tlfn2']?></td>
                        <td style="width:15%;"><?php echo $data['tlfn3']?></td>
                        <td style="width:15%;"><?php echo $data['email']?></td>	 
                        <td style="width:15%;"><?php echo  $data['annee'].substr($data['cycle'],0,1).$data['numroClasse']?></td>	            
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
								<h4 class="modal-title">supprimer éléve</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cet éléve?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"elevedelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="eleveupdate" enctype="multipart/form-data">
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
                     <label>Login</label>
						<input type="texte" class="form-control" name="login" required value="<?php echo $data['login']?>">				
                    </div>
                    <div class="form-group">
                     <label>Nom</label>
						<input type="texte" class="form-control" pattern="[a-zA-Z]*" name="nom" required value="<?php echo $data['nom']?>" >				
                    </div>	
                    <div class="form-group">
                     <label>Prénom</label>
						<input type="texte" class="form-control" pattern="[a-zA-Z]*" name="prenom" required value="<?php echo $data['prenom']?>" >				
                    </div>
                   <div class="form-group">	
                    <label>Adresse</label>
						<input type="texte" class="form-control" name="adresse" required value="<?php echo $data['adresse']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone1</label>
						<input type="texte" class="form-control" pattern="0[0-9]{9}" name="tlfn1" required value="<?php echo $data['tlfn1']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone2</label>
						<input type="texte" class="form-control"  pattern="0[0-9]{9}" name="tlfn2" required value="<?php echo $data['tlfn2']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>Téléphone3</label>
						<input type="texte" class="form-control"  pattern="0[0-9]{9}" name="tlfn3" required value="<?php echo $data['tlfn3']?>" >				
                    </div>
                    <div class="form-group">	
                    <label>email</label>
						<input type="email" class="form-control" name="email" required >				
                    </div>
                    <div class="form-group">
                  <label>Année</label>
                  <input type="number" min="1" class="form-control" name="annee" required value="<?php echo $data['annee']?>" >				
                </div>
                <div class="form-group">		
                <label>Numéro de classe</label>
                  <input type="number" min="1" class="form-control" name="numroClasse" required value="<?php echo $data['numroClasse']?>" >				
                </div>
                <div class="form-group">	
                    <label>Cycle</label>
                    <select name="cycle" type="text"  class="form-control">
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
<?php
}
public function afficher_adminEleve($eleves,$classes){
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
    $this->adminElevebody($eleves,$classes);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
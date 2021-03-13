<?php
namespace app\views;
class adminEnsClasse{
public function adminEnsClassebody($allclasse,$id_ens,$classes){
?>

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
<section>
<div class="jumbotron page" id="page1">
<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des classes</b></h2>
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
                        <td style="width: 1%;" >
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
							<p>Voulez-vous vraiment supprimer cet classe?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"ensclassedelete?id=".$data['id']."&id_ens=".$id_ens?>" class="btn btn-danger text-center">Supprimer</a>
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
public function afficher_adminEnsClasse($allclasse,$id_ens,$classes){
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
    $this->adminEnsClassebody($allclasse,$id_ens,$classes);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
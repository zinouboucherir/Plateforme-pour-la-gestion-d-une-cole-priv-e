<?php
namespace app\views;
class adminContact{
public function adminContactbody($telephones,$adresse,$faxs,$emails){
?>

<!-- add Modal HTML -->
<div id="addEmployeeModal1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addTelephone" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter numéro de Téléphone</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Téléphone</label>
                    <div class="form-group">	
						<input type="texte" pattern="0[0-9]{9}" class="form-control" name="numero" required >				
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
						<h2>Gestion <b>des numéro de  téléphone</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal1" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau numéro de téléphone</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-responsive bg-white" >
				<thead>
					<tr>
                        <th>numéro de téléphone</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$telephones->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['numero']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal1<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal1<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal1<?php echo $data['id']?>" class="modal fade">
						<div class="modal-dialog">
						<div class="modal-content">
						<form>
							<div class="modal-header">						
								<h4 class="modal-title">Suuprimer numéro de téléphone</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer ce numéro</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"telephonedelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal1<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="telephoneupdate" enctype="multipart/form-data">
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
						<input type="texte" pattern="0[0-9]{9}" class="form-control" name="numero" required value="<?php echo $data['numero']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $telephones->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
</section>
 <!--------------------------------------------------------------------------------------------------->
 <div id="addEmployeeModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addFax" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter numéro de Fax</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Fax</label>
                    <div class="form-group">	
						<input type="texte" pattern="0[0-9]{8}" class="form-control" name="fax" required >				
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
						<h2>Gestion <b>des numéro de  fax</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal2" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau numéro de fax</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-responsive bg-white" >
				<thead>
					<tr>
                        <th>numéro de fax</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$faxs->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['fax']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal2<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal2<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal2<?php echo $data['id']?>" class="modal fade">
						<div class="modal-dialog">
						<div class="modal-content">
						<form>
							<div class="modal-header">						
								<h4 class="modal-title">Supprimer fax</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer ce fax?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"faxdelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal2<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="faxupdate" enctype="multipart/form-data">
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
						<input type="texte" pattern="0[0-9]{8}" class="form-control" name="fax" required value="<?php echo $data['fax']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $faxs->closeCursor();
        ?>
			</tbody>
		</table>      
</div>
</section>
<!--------------------------------------------------------------------------------------------------->
<div id="addEmployeeModal3" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addEmail" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter email</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="form-group">	
                    <label>Email</label>
                    <div class="form-group">	
						<input type="email" class="form-control" name="email" required >				
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
						<h2>Gestion <b>des E-mails</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal3" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau mail</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-responsive bg-white" >
				<thead>
					<tr>
                        <th>E-mails</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$emails->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['email']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal3<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal3<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal3<?php echo $data['id']?>" class="modal fade">
						<div class="modal-dialog">
						<div class="modal-content">
						<form>
							<div class="modal-header">						
								<h4 class="modal-title">Supprimer email</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cet email?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"emaildelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal3<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="emailupdate" enctype="multipart/form-data">
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
						<input type="email" class="form-control" name="email" required value="<?php echo $data['email']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
        <?php
          }
        $emails->closeCursor();
        ?>
			</tbody>
		</table>
</div>
</section>

<!--------------------------------------------------------------------------------------------------->
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des adresses</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-responsive bg-white" style="width:100%;" >
				<thead>
					<tr>
                        <th>Adresse</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    $data=$adresse->fetch()
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['adresse']?></td>	   
                        <td style="width: 1%;" >
							<a href="#editEmployeeModal4<?php echo $data['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal4<?php echo $data['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal4<?php echo $data['id']?>" class="modal fade">
						<div class="modal-dialog">
						<div class="modal-content">
						<form>
							<div class="modal-header">						
								<h4 class="modal-title">Supprimer Adresse</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cette adresse?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"adressedelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal4<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="adresseupdate" enctype="multipart/form-data">
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
						<input type="texte" class="form-control" name="adresse" required value="<?php echo $data['adresse']?>">				
                    </div>		
				    </div>							
				</div>
			</form>
		</div>
	</div>
</div>
	</tbody>
		</table>
	</div>
</section>
<?php
}
public function afficher_adminContact($telephones,$adresse,$faxs,$emails){
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
    $this->adminContactbody($telephones,$adresse,$faxs,$emails);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
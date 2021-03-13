<?php
namespace app\views;
class adminPresentation{
public function adminPresentationbody($presentations){
?>

<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des presentations</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une nouvelle présentation</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
                        <th>Titre</th>
						<th>Description</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$presentations->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['titre']?></td>		
                        <td style=" word-break: break-all;width: 30%;"> <?php echo $data['texte']?></td>
                        <td><img src=<?php echo $data['image']?> width="100%" height="200"></td>
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
								<h4 class="modal-title">supprimer Paragraphe</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Voulez-vous vraiment supprimer cette paragraphe?</p>
							<p class="text-warning"><small>son action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"presentationdelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="presentationupdate" enctype="multipart/form-data">>
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Présentation</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<input hidden type="text" class="form-control" name="id" required value="<?php echo $data['id']?>">
                    <label>titre</label>
						<input type="text" class="form-control" name="titre" required value="<?php echo $data['titre']?>">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="texte" required ><?php echo $data['texte']?></textarea>
					</div>		
                    <div class="form-group">
						<label>image</label>
						<input type="file" name="image" accept="image/*" class="form-control" required>
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
        $presentations->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
</section>

	
<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addPresentation" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter une Pragraphe</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
                <label>titre</label>
						<input type="text" class="form-control" name="titre" required >				
                </div>
        
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="texte" required></textarea>
					</div>		
                    <div class="form-group">
						<label>image</label>
						<input type="file" name="image" accept="image/*" class="form-control" required>
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
public function afficher_adminPresentation($presentations){
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
    $this->adminPresentationbody($presentations);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>


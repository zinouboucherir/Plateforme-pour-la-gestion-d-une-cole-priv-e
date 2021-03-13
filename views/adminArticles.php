<?php
namespace app\views;
class adminArticles{
public function adminArticlesbody($articles){
?>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des articles</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel article</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
				<thead>
					<tr>
						<th>Titre</th>
						<th>Type</th>
						<th>Description</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$articles->fetch())
                      {
                        ?>
                    <tr>
						<td style="width:15%;"><?php echo $data['titre']?></td>
                        <td style="width: 15%;"><?php echo $data['type']?></td>						
                        <td style=" word-break: break-all;width: 30%;"> <?php echo $data['descr']?></td>
                        <td><img src=<?php echo $data['lien']?> width="100%" height="200"></td>
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
								<h4 class="modal-title">Supprimer l'article</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
						<div class="modal-body">					
							<p>Êtes-vous sûr de vouloir supprimer cet article?</p>
							<p class="text-warning"><small>Tson action ne peut être annulée.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
							<a href="<?php echo"Articledelete?id=".$data['id']?>" class="btn btn-danger text-center">Supprimer</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal<?php echo $data['id']?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form  method="POST" action="Articleupdate" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Article</h4>
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
						<textarea class="form-control" name="descr" required ><?php echo $data['descr']?></textarea>
					</div>
					<div class="form-group">
						<label>type</label>
						<select name="type" type="text" name="type" class="form-control">
		  					<option value="tout">tout</option>
							<option value="enseignant">enseignant</option>
							<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
							<option value="parent">parent</option>
						</select>
					</div>				
                    <div class="form-group">
						<label>image</label>
						<input type="file" accept="image/*" name="image" class="form-control" required>
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
        $articles->closeCursor();
        ?>
			</tbody>
		</table>
	</div>
</section>

<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="addArticles" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>titre</label>
						<input type="text" class="form-control" name="titre" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="descr" required></textarea>
					</div>
					<div class="form-group">
						<label>type</label>
						<select name="type" type="text" name="type" class="form-control">
		  					<option value="tout">tout</option>
							<option value="enseignant">enseignant</option>
							<option value="primaire">primaire</option>
							<option value="moyen">moyen</option>
							<option value="secondaire">secondaire</option>
							<option value="parent">parent</option>
						</select>
					</div>		
                    <div class="form-group">
						<label>image</label>
						<input type="file" accept="image/*" name="image" class="form-control" required>
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
public function afficher_adminArticle($articles){
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
    $this->adminArticlesbody($articles);
	$footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
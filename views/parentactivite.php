<?php
namespace app\views;
class parentactivite{
public function parentactivitebody($activites){
?>
<br/>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Les activitées extra-scolaire de vos enfants</b></h2>
					</div>
				</div>
			</div>
            <input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
     <table class="table table-hover table-bordered table-responsive bg-white" id="myTable" style="width:100%;">
  <tbody>
  <thead>
    <tr>
     <th scope="col">Prénom</th>
     <th scope="col">Nom</th>
      <th scope="col">Type d'activité</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <?php
                    while ($data=$activites->fetch())
                      {
                        ?>
                    <tr> 
                        <td style="width:10%;"><?php echo $data['prenom']?></td>
                        <td style="width:10%;"><?php echo $data['nom']?></td>
                        <td style="width:10%;"><?php echo $data['type']?></td>
                        <td style="width:10%;"><?php echo $data['descr']?></td>
                    </tr> 

                    <?php
          }
        $activites->closeCursor();
        ?>
  </tbody>
</table>
</div>
</section>

<br>
<?php 
}
public function afficher_parentactivite($activites){
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
    $menu=new menuParent();
    $menu->getmenu();
    $this->parentactivitebody($activites);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
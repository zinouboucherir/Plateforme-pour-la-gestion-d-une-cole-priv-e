<?php
namespace app\views;
class parentnote{
public function parentnotebody($notes){
?>
<br/>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Les notes de vos enfants</b></h2>
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
      <th scope="col">Matiére</th>
      <th scope="col">Controle continu</th>
      <th scope="col">Note de devoir</th>
      <th scope="col">Note d'examen</th>
    </tr>
  </thead>
  <?php
                    while ($data=$notes->fetch())
                      {
                        ?>
                    <tr> 
                        <td style="width:10%;"><?php echo $data['prenom']?></td>
                        <td style="width:10%;"><?php echo $data['nom']?></td>
                        <td style="width:10%;"><?php echo $data['matiere']?></td>
                        <td style="width:10%;"><?php echo $data['cc']?></td>
                        <td style="width:10%;"><?php echo $data['devoir']?></td>
                        <td style="width:10%;"><?php echo $data['examen']?></td>
                    </tr> 

                    <?php
          }
        $notes->closeCursor();
        ?>
  </tbody>
</table>
</div>
</section>

<br>
<?php 
}
public function afficher_parentnote($notes){
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
    $this->parentnotebody($notes);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
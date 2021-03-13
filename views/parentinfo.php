<?php
namespace app\views;
class parentinfo{
public function parentinfobody($infos){
?>
<br/>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Vos informations personelles</b></h2>
					</div>
				</div>
			</div>
<br><br>
        <table class="table table-hover table-bordered table-responsive bg-white" style="width:100%;">
  <tbody>
  <?php
                    $data=$infos->fetch();
                      {
                        ?>
                    <tr> 
                        <th style="width:10%;">Nom</th>
                        <td style="width:10%;"><?php echo $data['nom']?></td>
                    </tr> 
                    <tr> 
                        <th style="width:10%;">Prénom</th>
                        <td style="width:10%;"><?php echo $data['prenom']?></td>
                    </tr> 
                    <tr> 
                        <th style="width:10%;">Adresse</th>
                        <td style="width:10%;"><?php echo $data['adresse']?></td>
                    </tr> 
                    <tr> 
                        <th style="width:10%;">Numéro de téléphone 1</th>
                        <td style="width:10%;"><?php echo $data['tlfn1']?></td>
                    </tr> 
                    <th style="width:10%;">Numéro de téléphone 2</th>
                        <td style="width:10%;"><?php echo $data['tlfn2']?></td>
                    </tr> 
                    <th style="width:10%;">Numéro de téléphone 3</th>
                        <td style="width:10%;"><?php echo $data['tlfn3']?></td>
                    </tr> 

        <?php
          }
        $infos->closeCursor();
        ?>
  </tbody>
</table>

</div>
</section>

<br>
<?php 
}
public function afficher_parentinfo($infos){
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
    $this->parentinfobody($infos);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
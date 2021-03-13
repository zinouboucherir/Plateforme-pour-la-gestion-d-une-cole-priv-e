<?php
namespace app\views;
class ensMoyen{
public function ensMoyenbody($ens){
?>

<section><div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>La liste des enseignants du cycle<b> moyen</b></h2>
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
                    
					</tr>
        <?php
          }
        $ens->closeCursor();
        ?>
		</tbody>
		</table>
        </div>
</section>

  
        <br/><br/>
        <?php
} 
public function afficher_ensMoyen($ens){
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
    $menu=new menu();
    $menu->getmenu();
    $this->ensMoyenbody($ens);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
<?php
namespace app\views;
class emploiEleve{
public function emploiElevebody($emplois){
?>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Votre emploi du temps</b></h2>
					</div>
				</div>
			</div>
<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
<table class="table table-hover table-bordered bg-white table-responsive" id="myTable" >
				<thead>
					<tr>
                      <th>classe</th>
                        <th>cycle</th>
                        <th>jour</th>
						<th>8-9</th>
						<th>9-10</th>
                        <th>10-11</th>
						<th>11-12</th>
                        <th>12-13</th>
                        <th>13-14</th>
						<th>14-15</th>
                        <th>15-16</th>
						<th>16-17</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$emplois->fetch())
                      {
                        ?>
                    <tr>
                        <td style="width:15%;"><?php echo $data['annee'].substr($data['cycle'],0,1).$data['numroClasse']?></td>
                        <td style="width:15%;"><?php echo $data['cycle']?></td>
                        <td style="width:15%;"><?php echo $data['jour']?></td>	
                        <td style="width:15%;"><?php echo $data['t1']?></td>
                        <td style="width:15%;"><?php echo $data['t2']?></td>
                        <td style="width:15%;"><?php echo $data['t3']?></td>
                        <td style="width:15%;"><?php echo $data['t4']?></td>
                        <td style="width:15%;"><?php echo $data['t5']?></td>	
                        <td style="width:15%;"><?php echo $data['t6']?></td>
                        <td style="width:15%;"><?php echo $data['t7']?></td>
                        <td style="width:15%;"><?php echo $data['t8']?></td>
                        <td style="width:15%;"><?php echo $data['t9']?></td>
					</tr>
        <?php
          }
        $emplois->closeCursor();
        ?>
		</tbody>
		</table>
        </div>

</section>

<br>
<?php
} 
public function afficher_emploiEleve($emplois){
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
    $menu=new menueleve();
    $menu->getmenu();
    $this->emploiElevebody($emplois);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
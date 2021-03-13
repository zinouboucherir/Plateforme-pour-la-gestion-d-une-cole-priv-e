<?php
namespace app\views;
class emploiParent{
public function emploiParentbody($emplois){
?>
<br> <br>
<section>
<div class="jumbotron page" id="page1">
        <div class="table-title m-0" >
				<div class="row">
					<div class="col-sm-6">
						<h2>Les emplois du temps de vos enfants</b></h2>
					</div>
				</div>
			</div>
      <br>
      <input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
    
<table class="table table-hover table-bordered bg-white table-responsive"  id="myTable">
				<thead>
					<tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Classe</th>
                    <th>Jour</th>
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
                        <td ><?php echo $data['prenom']?></td>
                        <td><?php echo $data['nom']?></td>
                        <td><?php echo $data['annee'].substr($data['cycle'],0,1).$data['numroClasse']?></td>
                        <td><?php echo $data['jour']?></td>	
                        <td><?php echo $data['t1']?></td>
                        <td><?php echo $data['t2']?></td>
                        <td><?php echo $data['t3']?></td>
                        <td><?php echo $data['t4']?></td>
                        <td><?php echo $data['t5']?></td>	
                        <td><?php echo $data['t6']?></td>
                        <td><?php echo $data['t7']?></td>
                        <td><?php echo $data['t8']?></td>
                        <td><?php echo $data['t9']?></td>
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
public function afficher_emploiParent($emplois){
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
    $this->emploiParentbody($emplois);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
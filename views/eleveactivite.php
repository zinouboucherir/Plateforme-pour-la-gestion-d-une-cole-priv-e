<?php
namespace app\views;
class eleveactivite{
public function eleveactivitebody($activites){
?>
<br/>
<br>
<section>
  
</section>
<div class="jumbotron page" id="page1">

			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Vos Activitées extra scolaires</b></h2>
					</div>
				</div>
			</div>
            <br>
            <table class="table table-hover table-bordered table-responsive bg-white" style="width:100%;">
              <thead>
                <tr>
                  <th scope="col">Type d'activité</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
               <tbody>
              <?php
                    while ($data=$activites->fetch())
                      {
                        ?>
                    <tr> 
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
public function afficher_eleveactivite($activites){
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
    $this->eleveactivitebody($activites);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
      
       
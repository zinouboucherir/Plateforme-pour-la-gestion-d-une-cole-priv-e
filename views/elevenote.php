<?php
namespace app\views;
class elevenote{
public function elevenotebody($notes){
?>
<br/>
<br>
<section>
  
</section>
<div class="jumbotron page" id="page1">

			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Vos Notes</b></h2>
					</div>
				</div>
			</div>
            <br>
            <table class="table table-hover table-bordered table-responsive bg-white" style="width:100%;">
              <thead>
                <tr>
                  <th scope="col">Matiére</th>
                  <th scope="col">Controle continu</th>
                  <th scope="col">Note de devoir</th>
                  <th scope="col">Note d'examen</th>
                </tr>
              </thead>
               <tbody>
              <?php
                    while ($data=$notes->fetch())
                      {
                        ?>
                    <tr> 
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
public function afficher_elevenote($notes){
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
    $this->elevenotebody($notes);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
       
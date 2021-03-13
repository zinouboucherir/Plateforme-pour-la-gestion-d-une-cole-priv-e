<?php
namespace app\views;
class restauration{
public function resaturationbody($restaus){
?>
<br/>

<?php 

        while ($data=$restaus->fetch())
        {
        ?>
        <center>
        <div class="col-sm-12 mb-2" style="width: 70%;">
                <div class="card">
                <div class="card-header">
  <h5 id="schoolname" style="color:#FF8C3E; font-size: 25px;" class="text-center"><?php  echo $data['jour']?></h5>
  </div>
                 <div class="card-body" style="background-image: url('https://i.pinimg.com/736x/85/5b/fc/855bfce7533a04bca7e0634cca73cb6a.jpg');
background-size: cover;">
               <center><h4 class="card-title">Entrée: <b><?php echo $data['entrée']?></b></h4></center>   
                <center> <h4 class="card-title">Plat principale:<b><?php echo $data['principale']?></b></h4></center> 
                 <center> <h4 class="card-title">Dessert: <b><?php  echo $data['dessert']?></b></h4></center>
                </div>
            </div>
                </div>
        </center>
    
<?php
        }
        $restaus->closeCursor();
        ?>
<br/>
<?php
} 
public function afficher_resauration($restaus){
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
    $this->resaturationbody($restaus);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
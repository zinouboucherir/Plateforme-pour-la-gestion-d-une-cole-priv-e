<?php
namespace app\views;
class showinfo{
public function showinfobody($info){
?>
<br/>
<?php 
        while ($data=$info->fetch())
        {
        ?>
        <div class="col-12 mb-2" >
        <br>
            <div class="card" style="width:100%;">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo $data['descr']?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <br><br>
        <?php
} 
public function afficher_showinfo($info){
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
    $this->showinfobody($info);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
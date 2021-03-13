<?php
namespace app\views;
class showarticle{
public function showarticlebody($article){
?>
<br/>
<?php 
        while ($data=$article->fetch())
        {
        ?>
       <div class="mb-2" style="margin-left:20%; margin-right: 20%;" >
            <div class="card" style="width:auto;">
                <img src=<?php echo $data['lien'] ?> class="card-img-top" width="100" height="350px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo $data['descr']?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <br>
<?php
} 
public function afficher_showarticle($article){
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
    $this->showarticlebody($article);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
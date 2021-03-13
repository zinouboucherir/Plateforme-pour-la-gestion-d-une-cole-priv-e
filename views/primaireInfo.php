<?php
namespace app\views;
class primaireinfo{
public function infoPrimairebody($infos){
?>

<h1 id="schoolname" style="color:cadetblue" class="text-center">Informations Pratique</h1>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <?php 
        while ($data=$infos->fetch())
        {
        ?>
        <div class="col-sm-3 mb-2">
            <div class="card">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo  substr($data['descr'],0,150)?>...</p>
                     <center><a href="<?php echo "showinfo?id=".$data['id']?>" class="btn btn-info text-center">Afficher la suite</a></center>
                </div>
            </div>
        </div>
        <?php
        }
        $infos->closeCursor();
        ?>
    </div>
</div>   
</section>


<br/><br/>
<?php
} 
public function afficher_infoprimaire($infos){
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
    $this->infoPrimairebody($infos);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
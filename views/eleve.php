<?php
namespace app\views;
class eleve{
public function elevebody($infos){
?>

<br/> <?php 
        $data=$infos->fetch()
        ?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Binevenu <?php echo $data['prenom']; ?></h1>
<br/>
<section>
<div class="jumbotron page" id="page1" >
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://image.freepik.com/free-photo/red-pin-event-calendar-background-close-up-time_37282-328.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Emplois du temps</h5>
                     <p class="card-text">Consulter votre emploi du temps scolaire. </p>
                     <center><a href="emploiEleve"class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.fcpe95.com/wp-content/uploads/2017/02/enfants-ecole.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Inforamtion personnelles</h5>
                     <p class="card-text">Consulter vos information personnelles. </p>
                     <center><a href="eleveinfos" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.ucl.ac.uk/teaching-learning/sites/teaching-learning/files/migrated-images/feedback-grade_1.jpeg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Notes</h5>
                     <p class="card-text">Consulter vos notes dans les différentes matiéres  </p>
                     <center><a href="elevenote" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.bemynounou.com/wp-content/uploads/2018/09/activite%CC%81-enfant-paris.png" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Activitées Extrascolaires</h5>
                     <p class="card-text">Consulter vos activitées extrascolaires</p>
                     <center><a href="eleveactivite" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
    </div>
</div>    
</section>

</body>
<BR></BR>
<?php
}
public function afficher_eleve($infos){
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
    $this->elevebody($infos);
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
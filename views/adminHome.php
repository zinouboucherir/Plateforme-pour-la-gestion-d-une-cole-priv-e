<?php
namespace app\views;
class adminHome{
public function adminHomebody($infos){
?>

 <?php 
        $data=$infos->fetch()
        ?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Binevenu <?php echo $data['prenom']; ?></h1>
<br/>
<section>
</section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://markateur.com/wp-content/uploads/2017/04/articles.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminArticles" class="btn btn-info text-center">Gérer les articles</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.liberte-scolaire.com/wp-content/uploads/2019/03/ecoleprimaire.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminPresentation" class="btn btn-info text-center">Gérer les présentations</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.ymag.fr/sites/default/files/styles/image_droite_biseau/public/clubs-utilisateurs.png?itok=av5n4Lna');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminUsers" class="btn btn-info text-center">Gérer les utilisateurs</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://images.squarespace-cdn.com/content/56a2785c69a91af45e06a188/1523033881435-CHQ4W7OIJSDSVPS044ZG/restaurant-healthy-food-menu-program.png?format=1500w&content-type=image%2Fpng');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminRestau" class="btn btn-info text-center">Gérer la restauration</a></center>
                </div>
            </div>
        </div>
    </div>
<section>
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://image.freepik.com/free-photo/red-pin-event-calendar-background-close-up-time_37282-328.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEmploi" class="btn btn-info text-center">Gérer les emplois du temps</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://img.aws.la-croix.com/2019/11/13/1201060070/premier-degre-enseignant-debutant-gagne-9-moins-moyenne-lOCDE_0_1400_933.jpg');background-size: cover;">
            
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEns" class="btn btn-info text-center">Gérer les enseignants</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://img.freepik.com/photos-gratuite/contactez-nous_36325-2135.jpg?size=626&ext=jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminContact" class="btn btn-info text-center">Gérer les contacts</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.votreassistante.net/wp-content/uploads/2013/02/creer-son-premier-diaporama-powerpoint.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="" class="btn btn-info text-center">Gérer le diaporama</a></center>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
}
public function afficher_adminHome($infos){
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
    $menu=new adminMenu();
    $menu->getmenu();
    $this->adminHomebody($infos);
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>

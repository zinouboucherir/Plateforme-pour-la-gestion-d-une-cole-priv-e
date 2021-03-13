<?php
namespace app\views;
class primaire_view{
public function primairebody($articles){
?>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://image.freepik.com/free-photo/red-pin-event-calendar-background-close-up-time_37282-328.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Emplois du temps</h5>
                     <p class="card-text">Consulter les emplois du temps globale du cycle primaire. </p>
                     <center><a href="emploiPrimaire" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" >
                <img src="https://img.aws.la-croix.com/2019/11/13/1201060070/premier-degre-enseignant-debutant-gagne-9-moins-moyenne-lOCDE_0_1400_933.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Enseignants </h5>
                     <p class="card-text">Consulter la liste des enseignant et leur heure de réception. </p>
                     <center><a href="ensPrimaire" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2 ">
            <div class="card">
                <img src="https://www.authentikusa.com/uploads/images/orig/bon-a-savoir/informations-pratiques.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">informations pratiques</h5>
                     <p class="card-text">Consulter vos informations pratiques  </p>
                     <center><a href="primaireInfo" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://images.squarespace-cdn.com/content/56a2785c69a91af45e06a188/1523033881435-CHQ4W7OIJSDSVPS044ZG/restaurant-healthy-food-menu-program.png?format=1500w&content-type=image%2Fpng" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Restauration</h5>
                     <p class="card-text">vous pouvez consulter tout ce qui concerne la resaturation. </p>
                     <center><a href="restauration" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
    </div>
</div>    
</section>





<h1 id="schoolname" style="color:cadetblue" class="text-center">Articles</h1>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <?php 
        while ($data=$articles->fetch())
        {
        ?>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src=<?php echo $data['lien'] ?> class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo  substr($data['descr'],0,100)?>...</p>
                     <center><a href="<?php echo "showarticle?id=".$data['id']?>" class="btn btn-info text-center">Afficher la suite</a></center>
                </div>
            </div>
        </div>
        <?php
        }
        $articles->closeCursor();
        ?>
    </div>
</div>   
</section>


<br/><br/>
<?php
} 
}
?>